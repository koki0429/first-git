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
Route::get('contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::post('contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('contact.confirm');
Route::post('contact/thanks', 'App\Http\Controllers\ContactController@send')->name('contact.send');

Route::get('product/about', 'App\Http\Controllers\ProductController@about')->name('product.about');
Route::resource('product', 'App\Http\Controllers\ProductController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
