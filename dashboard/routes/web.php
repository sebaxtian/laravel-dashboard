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
    return view('welcome');
})->name('index');


Route::get('about', function () {
    return view('about');
})->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/flot', 'FlotController@index')->name('flot');

Route::get('/morris', 'MorrisController@index')->name('morris');

Route::get('/tables', 'TablesController@index')->name('tables');

Route::get('/forms', 'FormsController@index')->name('forms');

Route::get('/panels-wells', 'PanelsWellsController@index')->name('panels-wells');

Route::get('/buttons', 'ButtonsController@index')->name('buttons');

Route::get('/notifications', 'NotificationsController@index')->name('notifications');

Route::get('/typography', 'TypographyController@index')->name('typography');

Route::get('/icons', 'IconsController@index')->name('icons');

Route::get('/blank', 'BlankController@index')->name('blank');

Route::get('/login-page', 'LoginPageController@index')->name('login-page');

Route::get('/grid', 'GridController@index')->name('grid');
