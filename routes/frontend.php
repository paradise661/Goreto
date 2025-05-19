<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('/category/{slug}', [FrontendController::class, 'categoryProducts'])->name('category.products');



