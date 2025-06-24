<?php

use App\Http\Controllers\FrontendController;
// use App\Http\Controllers\CheckoutController;

use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('/product', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('/product/slug', [FrontendController::class, 'productsingle'])->name('frontend.productsingle');

Route::get('/category/{slug}', [FrontendController::class, 'categoryProducts'])->name('category.products');

Route::get('/upload-prescription', [FrontendController::class, 'prescription'])->name('frontend.prescription');



Route::get('/search', [FrontendController::class, 'search'])->name('search');
Route::get('/search/suggestions', [FrontendController::class, 'searchSuggestions'])->name('search.suggestions');


// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
// Route::get('/view-order/checkout/{deliverycharge}', [CheckoutController::class, 'OrderItems'])->name('order.view');

// Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
// Route::get('/confirmation/{order_number}', [CheckoutController::class, 'thankyou'])->name('checkout.thankyou');