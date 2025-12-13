<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthClientController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

//invité
Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[ProductController::class,'product_invité'] );
Route::get('/about-us', function () {
    return view('invité.about-us');
});

Route::get('/product/show/{id}',[ProductController::class,'InvitéindexProduct']);



//login:
//admin,client:

Route::get('/Se-connecter', function () {
    return view('invité.SeConnecter');
});
Route::post('/Se-connecter',[Auth::class,'login']);

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



Route::get('/products/c',[ProductController::class,'product_client']);
Route::get('/products/c/product/show/{id}',[ProductController::class,'ClientindexProduct']);
//buy
Route::post('/products/c/product/show/{id}/bye',[ProductController::class,'acheter']);

Route::get('/about-us/c', function () {
    return view('client.about-usCl');
});

Route::get('/invoice/c',[InvoiceController::class,'invoices']);
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/home/c', function () {
    return view('client.homeC');
});
Route::get('/admin', function () {
    return view('admin.nav-vect');
});





Route::get('/admin/invoices', function () {
    return view('admin.invoice');
});

Route::get('/admin/message', function () {
    return view('admin.messages');
});
//product de admin
Route::get('/admin/products',[ProductController::class,'showproduct'] )->name('products');
Route::get('/admin/addProductShow', function () {
    return view('admin.addProductShow');
});
Route::post('/admin/product',[ProductController::class,'ajouterProduit'])->name('add.product');



