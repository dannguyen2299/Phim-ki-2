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

Route::get('', 'frontend\IndexController@getIndex')->name("index");
Route::get('error', 'frontend\ErController@getError');

Route::prefix('movie')->group(function () {
    Route::get('movie-{movie_id}.html', 'frontend\MovieController@GetPage');
    Route::get('page-movie-{movie_id}&{episode_id}&{server}.html', 'frontend\MovieController@GetMovie');
});
Route::post('search', 'frontend\SearchController@GetSearch');
Route::get('filter/{category_id}', 'frontend\FilterController@GetFilter');
Route::get('filter-nation/{nation_id}', 'frontend\FilterController@GetNation');
Route::get('sigup', 'frontend\SigUpController@GetSigUp');
Route::get('login', 'frontend\LoginController@getLogin')->name('login');
Route::get('logout', 'frontend\LoginController@logout')->name('logout');
Route::post('processLogin', 'frontend\LoginController@processLogin')->name('processLogin');
Route::get('/processLogin/{provider}', 'frontend\LoginController@redirect');
  Route::get('/processLogin/callback/{provider}', 'frontend\LoginController@callback');
//Thanh - admin

Route::get('login_b', 'Login_backController@getLoginB');
Route::post('login_b', 'Login_backController@postLogin');

Route::middleware(['CheckLogin'])->prefix('admin_1')->group(function () {
    Route::get('', 'backend\AdminController@show_dashboard')->name('admin');
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


    // User
    Route::middleware(['checkAdmin'])->group(function(){
        Route::get('user', 'backend\UserController@getUser');
        Route::get('add-user', 'backend\UserController@addUser')->name('add-user');
        Route::get('save-user', 'backend\UserController@saveUser');

        Route::get('active-user/{user_id}', 'backend\UserController@active');
        Route::get('unactive-user/{user_id}', 'backend\UserController@unactive');
        Route::get('delete-user/{user_id}', 'backend\UserController@delete_user');
        Route::get('edit-user/{user_id}', 'backend\UserController@edit_user');
        Route::get('update-user/{user_id}', 'backend\UserController@update_user');

    });
       

    

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
    
    //* Movie Detail
    Route::get('movie-detail', 'backend\MovieDetailController@movie_detail');

    //* Report
    Route::get('list-report', 'backend\ReportController@list_report');
    Route::get('delete-report/{report_id}', 'backend\ReportController@delete_report');
    Route::get('fix-report/{report_id}', 'backend\ReportController@fix_report');
    Route::get('update-report/episode_id={episode_id}&report_id={report_id}', 'backend\ReportController@update_report');
    Route::get('fixed-report/{report_id}', 'backend\ReportController@fixed');
    Route::get('not-fixed-report/{report_id}', 'backend\ReportController@not_fixed');

    //*end - admin
});



//end - admin