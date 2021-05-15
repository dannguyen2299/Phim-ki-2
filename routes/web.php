<?php

use App\Http\Controllers\LoginController;
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
Route::get('error', 'ErController@getError');

Route::prefix('movie')->group(function () {
    Route::get('', 'MovieController@GetPage');
    Route::get('page', 'MovieController@GetMovie');
});
Route::get('search', 'SearchController@GetSearch');
Route::get('sigup', 'SigUpController@GetSigUp');
Route::get('login', 'LoginController@getLogin');

//Thanh - admin

Route::get('login_b', 'Login_backController@getLoginB');
Route::post('login_b', 'Login_backController@postLogin');

Route::prefix('admin_1')->group(function () {
    Route::get('', 'AdminController@show_dashboard');
    Route::get('dashboard', 'AdminController@show_dashboard');

    //* Category
    Route::get('add-category', 'CategoryController@add_category');
    Route::get('edit-category/{category_id}', 'CategoryController@edit_category');
    Route::get('list-category', 'CategoryController@list_category');
    Route::get('update-category/{category_id}', 'CategoryController@update_category');
    Route::get('save-category', 'CategoryController@save_category');
    Route::get('delete-category/{category_id}', 'CategoryController@delete_category');

    Route::get('active-category/{category_id}', 'CategoryController@active');
    Route::get('unactive-category/{category_id}', 'CategoryController@unactive');

    //* Movie
    Route::get('add-movie', 'MovieController@add_movie');
    Route::get('edit-movie/{movie_id}', 'MovieController@edit_movie');
    Route::get('list-movie', 'MovieController@list_movie');
    Route::get('update-movie/{movie_id}', 'MovieController@update_movie');
    Route::get('save-movie', 'MovieController@save_movie');
    Route::get('delete-movie/{movie_id}', 'MovieController@delete_movie');
    Route::get('edit-episode/{movie_id}', 'MovieController@edit_episode');

    Route::get('active-movie/{movie_id}', 'MovieController@active');
    Route::get('unactive-movie/{movie_id}', 'MovieController@unactive');

    // Nation
    Route::get('add-nation', 'NationController@add_nation');
    Route::get('edit-nation/{nation_id}', 'NationController@edit_nation');
    Route::get('list-nation', 'NationController@list_nation');
    Route::get('update-nation/{nation_id}', 'NationController@update_nation');

    Route::get('save-nation', 'NationController@save_nation');
    Route::get('delete-nation/{nation_id}', 'NationController@delete_nation');

    Route::get('active-nation/{nation_id}', 'NationController@active');
    Route::get('unactive-nation/{nation_id}', 'NationController@unactive');
    //end - admin
});



//end - admin