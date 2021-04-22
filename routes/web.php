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
