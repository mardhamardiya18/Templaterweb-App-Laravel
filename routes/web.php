<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.homepage');
})->name('home');

Route::get('/product', function () {
    return view('pages.product');
})->name('product');

Route::get('/product-detail', function () {
    return view('pages.product-detail');
})->name('product-detail');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');
