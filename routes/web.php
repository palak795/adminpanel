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


 Route::view('/test','profiles.create');

// Route::view('/test','profiles.search');

// Route::get('get-data','ProductController@showView')->name('show.view');

// Route::post('get-data','ProductController@search')->name('get.data');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::Resource('/category','CategoryController');

// Route::view('/category','profiles.insert');

 Route::Resource('/subcategory','SubcategoryController');

 Route::Resource('/dashboard','DashboardController');

Route::Resource('/product','ProductController');

Route::post('sub-cat','ProductController@getSubCategory')->name('subcat');