<?php
namespace App\Http\Controllers;
use App\Models\Category;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function home()
{
    $categories = Category::whereNull('parent_id') // Only top-level categories
        ->with('children.children') 
                       // Eager-load children and grandchildren
        ->get();

    return view('frontend.home.index', compact('categories'));
} 
}
