<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'image', 'banner', 'template', 'description', 'gallery', 'order', 'seo_title', 'seo_description',
        'seo_keywords',
        'seo_schema', 'status'
    ];
}
