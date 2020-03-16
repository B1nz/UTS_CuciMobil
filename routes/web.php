<?php

use App\Http\Controllers\CuciMobilController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', 'CuciMobilController@index');

Route::post('/admin/create','CuciMobilController@create');

Route::get('/admin/{id}/edit', 'CuciMobilController@edit');

Route::post('/admin/{id}/update', 'CuciMobilController@update');

Route::get('/admin/{id}/delete', 'CuciMobilController@delete');

Route::get('/admin/{id}/cetak', 'CuciMobilController@cetak');

Auth::routes();

Route::get('/auth', 'HomeController@index')->name('admin');
