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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('voyages', function () {
    return view('index');
})->name('index');

Route::get('voyages/{id_voyage}', function ($id_voyage) {
    return view('show');
})->where('id_voyage', '[0-9]+')->name('show');

Route::get('a_propos', function () {
    return view('about');
})->name('about');

Route::prefix('admin')->group(function () {
    Route::get('voyages', function () {
        return view('admin/voyages');
    })->name('admin-travels');

    Route::get('users', function () {
        return view('admin/users');
    })->name('admin-users');
});
