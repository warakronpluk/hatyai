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
    return view('welcome');
});
//admin

Route::get('/admin/index','AdminController@index')->name('index');
Route::get('/about','HomeController@about');
Auth::routes();
Route::post('/admin/category/create','CategoryController@create')->name('create');
Route::get('/admin/category/edit/{id}','CategoryController@edit');
Route::get('/admin/product/index','ProductController@index')->name('product');
Route::get('/admin/content/index','ContentController@index')->name('content');
Route::get('admin/admin/index','AdminController@index')->name('admin');
Route::get('admin/homepage/index','HomepageController@index')->name('homepage');
Route::get('/home', 'HomeController@index')->name('home');


