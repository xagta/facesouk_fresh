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
Route::resource('export', 'EntreprisesController');

Route::get('artisanat','ArtisantController@index')->name('artisanat_index');
Route::get('artisanat/show/{id}','ArtisantController@show')->name('show_artisan') ;
Route::post('artisanat/search','ArtisantController@search')->name('search');

Route::get('export/cat/{cat_id}','EntreprisesController@filterByCAt')->name('filterbycat') ;

Route::get('services/request/{service_id}','ServicesController@serviceRequestCreate')->name('requestservice_create') ;
Route::post('services/request/','ServicesController@serviceRequestStore')->name('requestservice_store') ;



Route::get('/services/{category}','ServicesController@index')->middleware('auth')->name('services_index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
