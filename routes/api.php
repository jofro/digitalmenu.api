<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/*
|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
| Auth Routes
|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
*/
Route::patch('register', App\Http\Controllers\Auth\AuthRegister::class)->name('register');
Route::post('login', App\Http\Controllers\Auth\AuthLogin::class)->name('login');
/*
|--------------------------------------------------------------------------
| Permission Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function(){

    //Route::get('/', \App\Http\Controllers\Product\ProductIndex::class)->name('/'); 
    /*
    |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    | Category Routes
    |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */
    Route::get('category/index', \App\Http\Controllers\Category\CategoryIndex::class)->name('category.index');
    Route::get('category/{category}/show', \App\Http\Controllers\Category\CategoryShow::class)->name('category.show');
    Route::post('category/store', \App\Http\Controllers\Category\CategoryStore::class)->name('category.store'); 
    Route::patch('category/{category}/update', \App\Http\Controllers\Category\CategoryUpdate::class)->name('category.update');
    Route::delete('category/{category}/delete', \App\Http\Controllers\Category\CategoryDelete::class)->name('category.delete');
    /*
    |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    | Product Routes
    |----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */
    Route::get('product/index', \App\Http\Controllers\Product\ProductIndex::class)->name('product.index');
    Route::post('product/store', \App\Http\Controllers\Product\ProductStore::class)->name('product.store'); 
    Route::get('product/{product}/show', \App\Http\Controllers\Product\ProductShow::class)->name('product.show');
    Route::patch('product/{product}/update', \App\Http\Controllers\Product\ProductUpdate::class)->name('product.update');
    Route::delete('product/{product}/delete', \App\Http\Controllers\Product\ProductDelete::class)->name('product.delete');
});





