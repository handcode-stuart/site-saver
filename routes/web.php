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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sites', 'SiteController@index')->name('sites.index');
Route::post('/sites', 'SiteController@store')->name('sites.store');

Route::get('/tags', 'TagController@index')->name('tags.index');
Route::post('/tags', 'TagController@store')->name('tags.store');
