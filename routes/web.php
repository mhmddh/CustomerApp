<?php

use App\Http\Controllers;
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
});

Route::get('/create', 'CustomerController@create');


Route::post('/home', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::resource('customers','CustomerController');

Route::get('/livesearch', 'LiveSearch@index');
Route::get('/livesearch/action', 'LiveSearch@action')->name('live_search.action');
Route::get('/viewcustomers', 'CustomerController@viewcustomers');
Route::get('/file/download/{id}', 'FileController@show')->name('downloadfile');



