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
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('services', 'PagesController@getServices');
Route::get('browse', 'PagesController@getBrowse');
Route::get('search', 'PagesController@getSearch');
Route::get('contact-us', 'PagesController@getContactUs');

Route::get('/', 'PagesController@getIndex');

Route::resource('countries', 'CountryController');
Route::resource('states', 'StateController');
Route::resource('postcodes', 'PostcodeController');
Route::resource('trades', 'TradeController');
Route::resource('stores', 'StoreController');

Route::get('{country_slug}/{state_slug}/{postcode_slug}/{trade_slug}/{store_slug}/',
	['as' => 'stores.show', 'uses' => 'StoreController@show'])
	->where('country_slug', '[\w\d\-\_]+')
	->where('state_slug', '[\w\d\-\_]+')
	->where('postcode_slug', '[\w\d\-\_]+')
	->where('trade_slug', '[\w\d\-\_]+')
	->where('store_slug', '[\w\d\-\_]+');

Route::get('{country_slug}/{state_slug}/{postcode_slug}/{trade_slug}/',
	['as' => 'trades.show', 'uses' => 'TradeController@show'])
	->where('country_slug', '[\w\d\-\_]+')
	->where('state_slug', '[\w\d\-\_]+')
	->where('postcode_slug', '[\w\d\-\_]+')
	->where('trade_slug', '[\w\d\-\_]+');

Route::get('{country_slug}/{state_slug}/{postcode_slug}/',
	['as' => 'postcodes.show', 'uses' => 'PostcodeController@show'])
	->where('country_slug', '[\w\d\-\_]+')
	->where('state_slug', '[\w\d\-\_]+')
	->where('postcode_slug', '[\w\d\-\_]+');

Route::get('{country_slug}/{state_slug}/',
	['as' => 'states.show', 'uses' => 'StateController@show'])
	->where('country_slug', '[\w\d\-\_]+')
	->where('state_slug', '[\w\d\-\_]+');

Route::get('{country_slug}/',
	['as' => 'countries.show', 'uses' => 'CountryController@show'])
	->where('country_slug', '[\w\d\-\_]+');
