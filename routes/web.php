<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('invité.products');
});
Route::get('/about-us', function () {
    return view('invité.about-us');
});
Route::get('/Sign-in', function () {
    return view('invité.signIn');
});


Route::get('/Se-connecter', function () {
    return view('invité.SeConnecter');
});