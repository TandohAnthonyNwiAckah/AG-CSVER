<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// api routes that need auth

Route::middleware(['auth:api'])->group(function () {
	
});


/* routes for Countries Controller  */	
	Route::get('countries', 'CountriesController@index')->name('all_country');
	Route::get('countries/index', 'CountriesController@index');
	Route::get('countries/index/{filter?}/{filtervalue?}', 'CountriesController@index');	
	Route::post('countries/importdata', 'CountriesController@importdata');	
	Route::get('countries/view/{rec_id}', 'CountriesController@view');	
	Route::post('countries/add', 'CountriesController@add');	
	Route::any('countries/edit/{rec_id}', 'CountriesController@edit');	
	Route::any('countries/delete/{rec_id}', 'CountriesController@delete');

/* routes for Currencies Controller  */	
	Route::get('currencies', 'CurrenciesController@index')->name('all_currency');
	Route::get('currencies/index', 'CurrenciesController@index');
	Route::get('currencies/index/{filter?}/{filtervalue?}', 'CurrenciesController@index');	
	Route::post('currencies/importdata', 'CurrenciesController@importdata');	
	Route::get('currencies/view/{rec_id}', 'CurrenciesController@view');	
	Route::post('currencies/add', 'CurrenciesController@add');	
	Route::any('currencies/edit/{rec_id}', 'CurrenciesController@edit');	
	Route::any('currencies/delete/{rec_id}', 'CurrenciesController@delete');

