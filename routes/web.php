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
    return view('index');
});

Route::get('/3', function () {
    return view('api');
})->name('3');
Route::get('/generic','App\Http\Controllers\RelacionController@index')->name('generic');
// Route::get('/generic','App\Http\Controllers\RelacionController@obtenerTitulo')->name('generic');

Route::get('/2','App\Http\Controllers\RelacionController@g2')->name('2');

// Route::get('/')->name('');


// Route::get('/2', function () {
//     return view('g2');
// })->name('2');