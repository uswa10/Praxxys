<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/editproduct', function () {
    return view('/product/editproduct');
});

Route::get('/search', [ProductController::class, 'search']);



Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('product', 'App\Http\Controllers\ProductController');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
