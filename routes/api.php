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
// Route::middleware('auth:sanctum')->group(function(){
//     Route::get('/', \App\Http\Controllers\Product\ProductIndex::class); 
// });
Route::get('/', \App\Http\Controllers\Product\ProductIndex::class); 
Route::post('/categories', \App\Http\Controllers\Category\CategoryStore::class)->name('category.store'); 
Route::patch('register', App\Http\Controllers\Auth\AuthRegister::class)->name('register');
Route::post('login', App\Http\Controllers\Auth\AuthLogin::class)->name('login');


