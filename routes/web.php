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
Route::get('login', 'frontend\LoginController@getLogin')->name('login');
Route::get('logout', 'frontend\LoginController@logout')->name('logout');

Route::get('', 'frontend\IndexController@getIndex')->name("index");
Route::get('error', 'frontend\ErController@getError');

Route::prefix('movie')->group(function () {
    Route::get('movie-{movie_id}.html', 'frontend\MovieController@GetPage');
    Route::get('page-movie-{movie_id}&episode-{episode_id}&server-{server}.html', 'frontend\MovieController@GetMovie');
    Route::get('In_follow-{movie_id}&{user_id}','frontend\MovieController@InFollow' ); // follow cho trường hợp chưa tồn tại trong bảng
    Route::get('B_follow-{movie_id}&{user_id}','frontend\MovieController@BackFollow' );// follow cho TH đã tồn tại trong bảng
    Route::get('Dele_follow-{movie_id}&{user_id}','frontend\MovieController@DeleFollow' ); // hủy follow 
    Route::get('page-movie-{movie_id}&episode-{episode_id}&server-{server}.html', 'frontend\MovieController@GetMovie');
});
//  search
Route::post('search', 'frontend\SearchController@GetSearch');

//film-tick
Route::get('film_tick', 'frontend\filmTickController@getFilm');

Route::get('select-system', 'frontend\SearchController@GetChoice');

// Lọc theo thể loại và quốc gia
Route::get('filter/category-{category_id}', 'frontend\FilterController@GetFilter');
Route::get('filter-nation/nation-{nation_id}', 'frontend\FilterController@GetNation');
// 2 nút Xem thêm 
Route::get('new-movie-update', 'frontend\FilterController@GetNewMovie');
Route::get('movie-viet-nam', 'frontend\FilterController@GetMovieVN');

// END

//* Rating
Route::post('processRate','frontend\RateController@postRate');
//* Update view
Route::post('update-view','frontend\UpdateViewController@update_view');
//* Ajax live search
Route::post('ajax-processor','live_search\AjaxProcessor@process');

Route::get('sigup', 'frontend\SigUpController@GetSigUp');
Route::post('processLogin', 'frontend\LoginController@processLogin')->name('processLogin');
Route::get('/processLogin/{provider}', 'frontend\LoginController@redirect');
Route::get('/processLogin/callback/{provider}', 'frontend\LoginController@callback');
//Thanh - admin

// Route::get('login_b', 'Login_backController@getLoginB');
// Route::post('login_b', 'Login_backController@postLogin');

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

    //* Advertisement
    Route::get('list-advertisement', 'backend\AdvertisementController@list_advertisement');
    Route::get('add-advertisement', 'backend\AdvertisementController@add_advertisement');
    Route::get('save-advertisement', 'backend\AdvertisementController@save_advertisement');
    Route::get('edit-advertisement/{ad_id}', 'backend\AdvertisementController@edit_advertisement');
    Route::get('update-advertisement/{ad_id}', 'backend\AdvertisementController@update_advertisement');
    Route::get('delete-advertisement/{ad_id}', 'backend\AdvertisementController@delete_advertisement');
    Route::get('active-advertisement/{ad_id}', 'backend\AdvertisementController@active');
    Route::get('unactive-advertisement/{ad_id}', 'backend\AdvertisementController@unactive');


    //*end - admin
});


//end - admin