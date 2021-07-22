<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TaskController;

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
    Route::get('index', [CustomerController::class, 'index']);

    Route::get('create', [CustomerController::class, 'create']);

    Route::post('store', [CustomerController::class, 'store']);

    Route::get('{id}/show', [CustomerController::class, 'show']);

    Route::get('{id}/edit', [CustomerController::class, 'edit']);

    Route::post('{id}/update', [CustomerController::class, 'update']);

    Route::get('{id}/delete', [CustomerController::class, 'delete']);
});

Route::resource('tasks', 'App\Http\Controllers\TaskController');
