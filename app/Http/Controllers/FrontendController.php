<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sliders;
use App\Models\Division;
use App\Models\Product;
use App\Models\Advertise;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
{
    $sliders = Sliders::oldest('order')->get();

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

    return view('frontend.home.index', compact('sliders', 'categories', 'divisions', 'adv_single'));
}

    function product()
    {
        return view('frontend.product.index');
    }
    function productsingle()
    {
        return view('frontend.product.show');
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


}
