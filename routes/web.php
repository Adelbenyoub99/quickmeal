<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MenuController;


// Routage Client 

Route::get('/home', 'App\Http\Controllers\ClientController@index');
Route::get('/login', 'App\Http\Controllers\ClientController@login');
Route::get('/aPropos', 'App\Http\Controllers\ClientController@aPropos');
Route::get('/inscription', 'App\Http\Controllers\ClientController@inscription');
Route::get('/logResto', 'App\Http\Controllers\ClientController@logResto');
Route::get('/restaurant', 'App\Http\Controllers\ClientController@restaurant');
Route::get('/menu', 'App\Http\Controllers\ClientController@menu');
Route::post('/creer_compte', 'App\Http\Controllers\ClientController@creer_compte' );
Route::post('/connection', 'App\Http\Controllers\ClientController@connection');

Route::get('/profil', 'App\Http\Controllers\ClientController@profil');

Route::post('/connection', 'App\Http\Controllers\ClientController@connection');

// routage admin

Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard');

// routage restaurant

Route::get('/restaurants/create', 'App\Http\Controllers\RestaurantController@create')->name('restaurateur.newrestaurant');
Route::post('/restaurants', 'App\Http\Controllers\RestaurantController@store');
Route::get('/restaurants/liste', 'App\Http\Controllers\RestaurantController@listeRestaurant')->name('restaurateur.listerestaurant');
Route::get('/restaurants/supprimer/{id}', 'App\Http\Controllers\RestaurantController@suprimerRestaurant')->name('restaurants.supprimer');
Route::get('/restaurants/modifier/{id}', 'App\Http\Controllers\RestaurantController@edit')->name('restaurants.edit');
Route::put('/restaurants/modifier/{id}', 'App\Http\Controllers\RestaurantController@update')->name('restaurants.update');
Route::get('/restaurants/{restaurant}/edit', 'App\Http\Controllers\RestaurantController@edit')->name('restaurant.edit');



// routage menu

Route::get('/creation-menu/{restaurant_id}', 'App\Http\Controllers\MenuController@addMenu')->name('restaurateur.newmenu');
Route::post('/menu/{restaurant_id}', 'App\Http\Controllers\MenuController@store')->name('menus.store');
Route::get('/menus/liste', 'App\Http\Controllers\MenuController@listeMenu')->name('restaurateur.listemenu');

// routage plat

Route::get('/ajouter-plat', 'App\Http\Controllers\PlatController@create')->name('plat.create');

Route::get('/remplirMenu/{idmenu}', [MenuController::class, 'createPlat'])->name('menu.createPlat');



//Route::get('/restaurants/{id}/menus', 'App\Http\Controllers\MenuController@menusliste')->name('menus.liste');



