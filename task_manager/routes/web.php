<?php

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

Route::prefix('customer')->group(function () {
    Route::get('index', 'App\Http\Controllers\CustomerController@index');

    Route::get('create', 'App\Http\Controllers\CustomerController@create');

    Route::post('store', 'App\Http\Controllers\CustomerController@store');

    Route::get('{id}/show', 'App\Http\Controllers\CustomerController@show');

    Route::get('{id}/edit', 'App\Http\Controllers\CustomerController@edit');

    Route::post('{id}/update', 'App\Http\Controllers\CustomerController@update');

    Route::get('{id}/delete', 'App\Http\Controllers\CustomerController@delete');
});
