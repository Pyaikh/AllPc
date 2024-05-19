<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/processor', function () {
    return view('processor');
});

Route::get('/intel', function () {
    return view('intel');
});
Route::get('/sata', function () {
    return view('sata');
});
Route::get('/sata-disk', function () {
    return view('sata-disk');
});

Route::get('/video-card', function () {
    return view('video-card');
});
Route::get('/motherboard', function () {
    return view('motherboard');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/product', function () {
    return view('product');
});
