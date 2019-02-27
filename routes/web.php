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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('opportunities', 'OpportunitiesController')->middleware('auth');

Route::get('/services/{service_cat}','ServicesController@serviceByCat')->middleware('auth')->name('service_by_cat');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
