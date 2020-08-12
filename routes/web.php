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
    return view('pages.index');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/cart', function(){
    return view('pages.ecommerce.cart');
});

Route::get('/checkout', function(){
    return view('pages.ecommerce.checkout');
});

Route::get('', function(){
    return view('pages.ecommerce.tracking');
});

Route::get('/thankyou', function(){
    return view('pages.ecommerce.thankyou');
});


