<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

// Route::get('/demo', function () {
//     return Hash::make("codeit123");
// });


Route::get("/", [PageController::class, 'home'])->name('home');
Route::post("/vendor-request", [PageController::class, 'vendor_request'])->name('vendor_request');
Route::get("/shop/{id}", [PageController::class, 'shop'])->name('shop');
Route::get("/product/{id}", [PageController::class, 'product'])->name('product');

Route::fallback(function () {
    return view('404');
});
