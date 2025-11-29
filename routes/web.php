<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthClientController;
use App\Http\Controllers\Auth;

//invité
Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('invité.products');
});
Route::get('/about-us', function () {
    return view('invité.about-us');
});

Route::get('/product/show', function () {
    return view('invité.productShow');
});



//login:
//admin,client:
Route::get('/Se-connecter', function () {
    return view('invité.SeConnecter');
});
Route::post('/login',[Auth::class,'login']);
//Route::post('/login',[Auth::class,'admin']);


Route::get('/admin/addProduct', function () {
    return view('admin.addProduct');
});
//deconnect admin ,client
Route::get('/logout',[Auth::class,'logout']);
//client:
Route::get('/Sign-in', function () {
    return view('invité.signIn');
});
Route::post('/Sign-in',[Auth::class,'client']);
//login_client




Route::get('/products/c', function () {
    return view('client.productsC');
});
Route::get('/products/c/product/show', function () {
    return view('client.productshowC');
});
Route::get('/about-us/c', function () {
    return view('client.about-usCl');
});

Route::get('/invoice/c', function () {
    return view('client.invoiceC');
});
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/home/c', function () {
    return view('client.homeC');
});
Route::get('/admin', function () {
    return view('admin.nav-vect');
});



Route::get('/admin/addProductShow', function () {
    return view('admin.addProductShow');
});

Route::get('/admin/invoices', function () {
    return view('admin.invoice');
});

Route::get('/admin/message', function () {
    return view('admin.messages');
});