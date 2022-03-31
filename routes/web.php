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

// Route::get('/1', function () {
//     return view('generic');
// })->name('1');
Route::get('/generic','App\Http\Controllers\RelacionController@index')->name('generic');

Route::get('/2', function () {
    return view('g2');
})->name('2');