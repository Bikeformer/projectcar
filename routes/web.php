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

Route::get('/', function() {
    return redirect('/motorist');
});

Route::resource('/motorist', 'MotoristController', ['only' => ['index', 'show']]);

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'panel', 'namespace' => 'Panel'], function () {
//    Route::get('tickets', 'TicketsController@index')->name('tickets.index');
    Route::get('/', function() {
        return redirect('panel/motorist');
    });

    Route::resource('motorist', 'MotoristController');
    Route::resource('car', 'CarController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
