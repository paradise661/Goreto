<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sliders;
use App\Models\Division;
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

    // ✅ Get 3 divisions that have products with a division_id
    $divisions = Division::whereHas('products', function ($query) {
            $query->whereNotNull('division_id');
        })
        ->with(['products' => function ($query) {
            $query->whereNotNull('division_id')->latest()->take(10); // limit products if needed
        }])
        ->take(3)
        ->get();

    return view('frontend.home.index', compact('sliders', 'categories', 'divisions'));
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

        $products = Product::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%")
                    ->paginate(20);

        return view('frontend.search.results', compact('products', 'query'));
    }

}
