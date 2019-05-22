<?php

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

Route::get('/', 'VoyageController@index');

Route::resource('voyages', 'VoyageController');

Route::get('a-propos', 'StaticPageController@about')->name('about');

Route::prefix('admin')->group(function () {
    Route::resource('voyages', 'VoyageAdminController', ['as' => 'admin']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');