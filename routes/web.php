<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::resource('customer', 'CustomerController');

Route::resource('category', 'CategoryController');

Route::resource('estimate', 'EstimateController');
Route::put('estimate', 'EstimateController@estimateAddPrice')->name('estimateAddPrice');
Route::get('estimate-send-email/{estimate}', 'EstimateController@estimateMail')->name('estimateMail');

Route::resource('subcategory', 'SubcategoryController');

Route::resource('manuals', 'ManualController');
Route::get('manual/detail/{manual}', 'ManualController@detail')->name('manual.detail');

Route::get('cargarCategorias', 'CategoryController@searchCategory');
