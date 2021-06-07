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

//HOMEPAGE
Route::get('/', function () {
    return view('home', ['title'=>'Homepage']);
})->name('home');


//ABOUT
Route::get('/about', function () {
     return view('about');
})->name('about');


//CONTACTS
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');


//PRODUCTS
Route::get('/products', function () {
    return view('products');
})->name('products');