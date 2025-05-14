<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'description',
        'short_description',
        'image',
        'gallery',
        'price',
        'mrp',
        'specification',
        'education',
        'division_id',
        'contraindication',
        'dosage',
        'effects',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'seo_schema',
        'parent_id',
        'category_id',
    ];

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'product_brands', 'product_id', 'brand_id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }

    /**
     * Assign selected category along with all its ancestors (parent, grandparent).
     */
    public function syncAllCategories(array $selectedCategoryIds)
    {
        $finalCategoryIds = collect($selectedCategoryIds)->flatMap(function ($id) {
            $category = Category::with('parent.parent')->find($id);
            return collect([
                $category?->id,
                $category?->parent?->id,
                $category?->parent?->parent?->id,
            ])->filter();
        })->unique();

        $this->category()->sync($finalCategoryIds);
    }
}
