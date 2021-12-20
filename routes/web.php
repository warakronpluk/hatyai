<?php
use App\contents;
use App\Http\Controllers\HomepageController;
use App\Product;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//admin

Route::get('/admin/index','AdminController@index')->name('index');
Route::get('/about','HomeController@about');
Auth::routes();
Route::get('/','IndexController@index');


Route::get('/home', 'HomeController@index')->name('home');

//admin  Product

Route::get('/admin/product/index','ProductController@index')->name('product');
Route::get('/admin/product/edit/{id}','ProductController@edit');
route::post('/admin/product/update/{id}','ProductController@update');
Route::get('/admin/product/create','ProductController@create');
Route::post('/admin/product/create','ProductController@store')->name('create.product');
Route::get('/admin/product/delete/{id}','ProductController@destroy');


//admin  Homepage 

Route::get('admin/homepage/index','HomepageController@index')->name('homepage');
Route::get('/admin/homepage/create','HomepageController@create');
Route::post('/admin/hompage/create','HomepageController@store')->name('create.homepage');
Route::get('/admin/hompage/edit/{id}','HomepageController@edit');
Route::get('/admin/homepage/delete/{id}','HomepageController@destroy');
Route::post('/admin/homepage/update{id}','HomepageController@update')->name('update_homepage');

//admin Category


//admin  admin

Route::get('/admin/category/index','CategoryController@index');
Route::get('/admin/category/edit/{id}','CategoryController@edit');
Route::get('/admin/category/create','CategoryController@add');
Route::post('/admin/category/create','CategoryController@create');
Route::post('/admin/category/update/{id}','CategoryController@update');
Route::get('/admin/category/destroy/{id}','CategoryController@destroy');

//admin  Content

Route::get('/admin/content/index','ContentController@index')->name('content');
Route::get('admin/content/edit/{id}','ContentController@edit');
Route::get('/admin/content/create','ContentController@create');
Route::post('/admin/content/create','ContentController@store')->name('create.content');
Route::get('/admin/content/delete/{id}','ContentController@destroy');
Route::post('/admin/content/update/{id}','ContentController@update')->name('update_content');


