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

Route::get('/', 'NewsController@index');

Route::resource('pages', 'NewsController'); 


Route::get('/vision','NewsController@vision');

Route::get('/about','NewsController@about');

Route::get('/objectives','NewsController@objectives');

Route::get('/exchange','NewsController@exchange');
Route::get('/maintasks','NewsController@main');
Route::get('/corevalues','NewsController@core');
Route::get('/superemeCouncil','NewsController@super');
Route::get('/Executive Board','NewsController@board');
Route::get('/Zones and Branches','NewsController@zone');
Route::get('/laws','NewsController@laws');
Route::get('/regulations','NewsController@regulations');
Route::get('/islamic Banking Regulations ','NewsController@islamic');
Route::get('/Circulars','NewsController@circulars');
Route::get('/history','NewsController@history');
Route::get('/gallery','NewsController@gallery');
Route::get('/Financial Report','NewsController@report');
Route::get('/jobs','NewsController@job');