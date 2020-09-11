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


Route::post('/registere','utilisateurController@registre');

Route::get('/','DashboardController@index');
Route::get('/home','DashboardController@index');

Route::resource('/utilisateur','utilisateurController');

Route::get('/profile','utilisateurController@profile');
Route::post('/regester','utilisateurController@register');
Route::get('/regester','DashboardController@index');


Route::resource('societe','SocietesController');
Route::resource('projet','ProjectController');
Route::resource('client','ClientController');


Auth::routes();


