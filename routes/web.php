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

Route::get('', 'IndexController@getIndex');
Route::get('error','ErController@getError' );

Route::prefix('movie')->group(function () {
    Route::get('', 'MovieController@GetMovie');
    Route::get('page', 'MovieController@GetPage');
});
Route::get('search', 'SearchController@GetSearch');
Route::get('sigup','SigUpController@GetSigUp');

//Dannnnnnnnnnnnn

//Dan_2

//Thanh - admin

Route::get('dashboard', 'AdminController@show_dashboard');

//* Category
Route::get('add_category', 'CategoryController@add_category');
Route::get('edit_category/{category_id}', 'CategoryController@edit_category');
Route::get('list_category', 'CategoryController@list_category');
Route::get('update_category/{category_id}', 'CategoryController@update_category');
Route::get('save_category', 'CategoryController@save_category');
Route::get('delete_category/{category_id}', 'CategoryController@delete_category');
//end - admin