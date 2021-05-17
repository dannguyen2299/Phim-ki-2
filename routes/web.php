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

Route::get('', 'frontend\IndexController@getIndex');
Route::get('error', 'frontend\ErController@getError');

Route::prefix('movie')->group(function () {
    Route::get('movie-{movie_id}.html', 'frontend\MovieController@GetPage');
    Route::get('page-movie-{movie_id}&{episode_id}&{server}.html', 'frontend\MovieController@GetMovie');
});
Route::get('search', 'frontend\SearchController@GetSearch');
Route::get('sigup', 'frontend\SigUpController@GetSigUp');
Route::get('login', 'frontend\LoginController@getLogin');

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

    Route::get('active-movie/{movie_id}', 'backend\MovieController@active');
    Route::get('unactive-movie/{movie_id}', 'backend\MovieController@unactive');

    //* Nation
    Route::get('add-nation', 'backend\NationController@add_nation');
    Route::get('edit-nation/{nation_id}', 'backend\NationController@edit_nation');
    Route::get('list-nation', 'backend\NationController@list_nation');
    Route::get('update-nation/{nation_id}', 'backend\NationController@update_nation');
    Route::get('save-nation', 'backend\NationController@save_nation');
    Route::get('delete-nation/{nation_id}', 'backend\NationController@delete_nation');

    Route::get('active-nation/{nation_id}', 'backend\NationController@active');
    Route::get('unactive-nation/{nation_id}', 'backend\NationController@unactive');

    //* Episode
    Route::get('add-episode', 'backend\EpisodeController@add_episode');
    Route::get('edit-episode/{episode_id}', 'backend\EpisodeController@edit_episode');
    Route::get('list-episode/{movie_id}', 'backend\EpisodeController@list_episode');
    Route::get('update-episode/{episode_id}', 'backend\EpisodeController@update_episode');
    Route::get('save-episode', 'backend\EpisodeController@save_episode');
    Route::get('delete-episode/{episode_id}', 'backend\EpisodeController@delete_episode');

    Route::get('active-episode/{episode_id}', 'backend\EpisodeController@active');
    Route::get('unactive-episode/{episode_id}', 'backend\EpisodeController@unactive');
    
    //*end - admin
});



//end - admin