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

Route::get('/', 'OAuthController@index');
Route::middleware('auth')->get('/clients', 'OAuthController@clients');
Route::middleware('auth')->get('/authorized_clients', 'OAuthController@authorizedClients');
Route::middleware('auth')->get('/tokens', 'OAuthController@tokens');
