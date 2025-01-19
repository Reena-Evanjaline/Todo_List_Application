<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route to display all products
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route to store a new product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route to show the edit form for a specific product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route to update an existing product
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Route to delete a product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
