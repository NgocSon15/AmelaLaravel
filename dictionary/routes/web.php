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

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/result', function (Illuminate\Http\Request $request) {
    $word = $request->word;
    $array = [
        'tree' => 'cây',
        'house' => 'nhà',
        'developer' => 'lập trình viên'
    ];

    foreach ($array as $key => $meaning) {
        if ($key == $word)
        {
            return view('result', compact(['word', 'meaning']));
        }
    }

    return view('error');
});
