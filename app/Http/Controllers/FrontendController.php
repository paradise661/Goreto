<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Sliders;



use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function home()
    {
        $sliders = Sliders::oldest('order')->get();
        $categories = Category::whereNull('parent_id') // Only top-level categories
            ->with('children.children') 
            ->get();

        return view('frontend.home.index', compact('sliders','categories'));
    } 
}
