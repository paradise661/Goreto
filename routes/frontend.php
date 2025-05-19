<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('/category/{slug}', [FrontendController::class, 'categorysingle'])->name('categorysingle');


// public function categorysingle($slug)
//     {
//         $data = Category::where('status',1)->whereSlug($slug)->first();
//         if($data){
//             $category = Category::where('status',1)->where('id','!=',$data->id)->latest()->limit(5)->get();
//             return view('frontend.product.show', compact('data','product'));
//          }
//     }