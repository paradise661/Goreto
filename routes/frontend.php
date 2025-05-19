<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('/product', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('/product/slug', [FrontendController::class, 'productsingle'])->name('frontend.productsingle');

Route::get('/category/{slug}', [FrontendController::class, 'categoryProducts'])->name('category.products');



