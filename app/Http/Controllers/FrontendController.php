<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Sliders;
use App\Models\Division;
use App\Models\Product;
use App\Models\Advertise;
use Illuminate\Http\Request;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class FrontendController extends Controller
{
    public function home()
{
    $sliders = Sliders::oldest('order')->get();
    $products = Product::orderBy('created_at', 'desc')->get();


    $categories = Category::whereNull('parent_id')
        ->with('children.children')
        ->get();

    $divisions = Division::whereHas('products', function ($query) {
            $query->whereNotNull('division_id');
        })
        ->with(['products' => function ($query) {
            $query->whereNotNull('division_id')->latest()->take(10); // limit products if needed
        }])
        ->take(3)
        ->get();
        $adv_single = Advertise::where('status', 1)->whereLocation(2)->oldest('order')->first();

    return view('frontend.home.index', compact('sliders', 'categories', 'divisions', 'adv_single','products'));
}

    function product()
    {
        return view('frontend.product.index');
    }
    function productsingle($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('frontend.product.show', compact('product'));
    }
    function prescription()
    {
        return view('frontend.prescription');
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
    public function search(Request $request)
{
    $query = $request->input('query');

    // 1. Search products by name or description
    $products = Product::where('name', 'LIKE', "%{$query}%")
        ->orWhere('description', 'LIKE', "%{$query}%")
        ->paginate(20);

    // 2. If no products found, check categories matching query
    if ($products->isEmpty()) {
        // Find categories matching the query
        $categories = Category::where('name', 'LIKE', "%{$query}%")->get();

        if ($categories->isNotEmpty()) {
            // Collect category IDs and their children recursively (if needed)
            $categoryIds = collect();

            foreach ($categories as $category) {
                $categoryIds->push($category->id);

                // Add children categories recursively (if you have nested categories)
                if ($category->children->count()) {
                    foreach ($category->children as $child) {
                        $categoryIds->push($child->id);

                        if ($child->children->count()) {
                            foreach ($child->children as $grandchild) {
                                $categoryIds->push($grandchild->id);
                            }
                        }
                    }
                }
            }

            // Fetch products from those categories
            $products = Product::whereHas('category', function ($q) use ($categoryIds) {
                $q->whereIn('categories.id', $categoryIds);
            })->paginate(20);
        }
    }

    return view('frontend.search.results', compact('products', 'query'));
}

    public function searchSuggestions(Request $request)
{
    $query = $request->input('query');

    $suggestions = Product::where('name', 'LIKE', "%{$query}%")
        ->limit(5)
        ->pluck('name');

    return response()->json($suggestions);
}
public function pagesingle($slug, Request $request)
    {
        $content = Page::where('slug', $slug)->where('status', 1)->first();
        if ($content) {
            if ($content->template == 1) {

                return view('frontend.page.side', compact('content'));
            } elseif ($content->template == 2) {
                // $teams = Member::oldest('order')->limit(4)->get();
                // $departments = Department::whereStatus(1)->oldest('order')->limit(4)->get();
                return view('frontend.page.about', compact(['content']));
            }elseif ($content->template == 9) {

                return view('frontend.page.contact', compact('content'));
            }elseif ($content->template == 3) {

                return view('frontend.page.privacy', compact(['content']));
        }
        else {
            return view('errors.404');
        }
    }
    }



}
