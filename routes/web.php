<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.list');
});

// Route::get('/products/create', function() {
//     return view('products.create');
// });

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');
