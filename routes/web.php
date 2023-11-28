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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');

// layout
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');


// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

//Content.donees
Route::get('/document', $controller_path . '\UsersController@DocumentIndex')->name('liste');
Route::get('/audio', $controller_path . '\UsersController@AudioIndex')->name('liste');
Route::get('/image', $controller_path . '\UsersController@ImageIndex')->name('liste');
Route::get('/personnel', $controller_path . '\UsersController@PersonnelIndex')->name('liste');



//delete




    