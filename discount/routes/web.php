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

Route::get('/discount', function () {
    return view('discount');
});

Route::post('/display-discount', function (Illuminate\Http\Request $request) {
    $description = $request->description;
    $price = $request->price;
    $rate = $request->rate;
    $discountAmount = $price * $rate * 0.01;
    $discountPrice = $price - $discountAmount;

    return view('display', compact(['discountPrice', 'discountAmount', 'description', 'price', 'rate']));
});

Route::get('/display-discount', function () {
    return view('display');
});
