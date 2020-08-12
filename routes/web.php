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

Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/blog', function(){
    return view('pages.blog');
});

Route::get('post', function(){
    return view('pages.single_blog');
});

Route::get('/login', function(){
    return view('pages.login');
});

Route::get('/shop', function(){
    return view('pages.ecommerce.shop');
});

Route::get('/product', function(){
    return view('pages.ecommerce.single_product');
});

Route::get('/cart', function(){
    return view('pages.ecommerce.cart');
});

Route::get('/checkout', function(){
    return view('pages.ecommerce.checkout');
});

Route::get('/thankyou', function(){
    return view('pages.ecommerce.thankyou');
});

Route::get('track-order', function(){
    return view('pages.ecommerce.tracking');
});




