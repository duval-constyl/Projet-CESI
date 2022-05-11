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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/box_visiteurs', function () {
    return view('box_visiteurs');
});
Route::get('/box of idea', function () {
    return view('box of idea');
});
Route::get('/mentionslegales', function () {
    return view('mentionslegales');
});
Route::get('/comment', function () {
    return view('comment');
});
Route :: get ('/gestApp', function () {
    return view('gestApp');
});
Route::get('/mentionslegales2', function () {
    return view('mentionslegales2');
});
Route::get('/boutique', function () {
    return view('boutique');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/product-details', function () {
    return view('product-details');
});
Route::get('/product-2', function () {
    return view('product-2');
});
Route::get('/product-2-details', function () {
    return view('product-2-details');
});
Route::get('/publications', function () {
    return view('publications');
});
Route::get('/conditions', function () {
    return view('conditions');
});
Route::get('/inscription2', function () {
    return view('inscription2');
});


