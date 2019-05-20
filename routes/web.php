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
    return "Ceci est la page d’accueil";
});

Route::get('/voyages/{id_voyage?}', function ($id_voyage = null) {
    return "Ceci est la page qui affichera le detaild’un voyage identifié par $id_voyage";
})->where('id_voyage',	'[0-9]+');

Route::get('/a_propos', function () {
    return "Ceci est la page qui affichera les informations concernant l’entreprise";
});

Route::prefix('admin')->group(function () {	
    Route::get('/voyages', function () {
        return "Ceci est la page voyages de la console d’administration";
    });

    Route::get('/users', function () {
        return "Ceci est la page users de la console d’administration";
    });
});