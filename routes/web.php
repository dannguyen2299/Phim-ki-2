<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\masterController;
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

Route::get('', 'frontend\IndexController@getIndex');
Route::get('error','frontend\ErController@getError' );

Route::prefix('movie')->group(function () {
Route::get('', 'frontend\MovieController@GetPage');
    Route::get('page', 'frontend\MovieController@GetMovie');
    
});
Route::get('search', 'frontend\SearchController@GetSearch');
Route::get('sigup','frontend\SigUpController@GetSigUp');
Route::get('login','frontend\LoginController@getLogin');

//Thanh - admin

Route::get('login_b', 'Login_backController@getLoginB');
Route::post('login_b', 'Login_backController@postLogin');

Route::prefix('admin_1')->group(function () {
    Route::get('', 'backend\AdminController@show_dashboard');
    Route::get('dashboard', 'backend\AdminController@show_dashboard');

    //* Category
    Route::get('add-category', 'backend\CategoryController@add_category');
    Route::get('edit-category/{category_id}', 'backend\CategoryController@edit_category');
    Route::get('list-category', 'backend\CategoryController@list_category');
    Route::get('update-category/{category_id}', 'backend\CategoryController@update_category');
    Route::get('save-category', 'backend\CategoryController@save_category');
    Route::get('delete-category/{category_id}', 'backend\CategoryController@delete_category');

    Route::get('active-category/{category_id}', 'backend\CategoryController@active');
    Route::get('unactive-category/{category_id}', 'backend\CategoryController@unactive');

    //* Movie
    Route::get('add-movie', 'backend\MovieController@add_movie');
    Route::get('edit-movie/{movie_id}', 'backend\MovieController@edit_movie');
    Route::get('list-movie', 'backend\MovieController@list_movie');
    Route::get('update-movie/{movie_id}', 'backend\MovieController@update_movie');
    Route::get('save-movie', 'backend\MovieController@save_movie');
    Route::get('delete-movie/{movie_id}', 'backend\MovieController@delete_movie');

    Route::get('active-movie/{id_film}', 'backend\MovieController@active');
    Route::get('unactive-movie/{id_film}', 'backend\MovieController@unactive');
//end - admin
});



//end - admin