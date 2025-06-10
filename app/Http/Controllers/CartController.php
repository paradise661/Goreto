<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function add(Request $request)
{
    Cart::add([
        'id' => $request->id,
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->qty ?? 1,
        'attributes' => [
            'image' => $request->image,
        ],
    ]);

    return response()->json([
        'success' => 'Product added to cart!',
        'totalUniqueItems' => Cart::getContent()->count(),

    ]);
}


    public function index()
    {
        $cartItems = Cart::getContent();
        return view('frontend.cart.index', compact('cartItems'));
    }

    public function remove($id)
{
    Cart::remove($id);

    return response()->json([
        'success' => true,
        'totalUniqueItems' => Cart::getContent()->count(),
    ]);
}


    public function clear()
    {
        Cart::clear();
        return redirect()->back()->with('success', 'Cart cleared.');
    }
}
