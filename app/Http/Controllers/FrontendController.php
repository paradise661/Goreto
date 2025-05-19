<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sliders;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $sliders = Sliders::oldest('order')->get();
        $categories = Category::whereNull('parent_id')
            ->with('children.children')
            ->get();

        return view('frontend.home.index', compact('sliders', 'categories'));
    }

    public function categoryProducts($slug)
    {
        $category = Category::where('slug', $slug)
            ->with('children.children')
            ->firstOrFail();

        $categoryIds = collect([$category->id]);

        if ($category->children->count()) {
            foreach ($category->children as $child) {
                $categoryIds->push($child->id);

                foreach ($child->children as $grandchild) {
                    $categoryIds->push($grandchild->id);
                }
            }
        }

        $products = Product::whereHas('category', function ($q) use ($categoryIds) {
            $q->whereIn('categories.id', $categoryIds);
        })->latest()->paginate(20);

        return view('frontend.category.products', compact('products', 'category'));
    }
}
