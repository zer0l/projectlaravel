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

Route::get('/', 'zayvkaController@zayvkaHome')->name('welcome');

Route::get('/dashboard', 'zayvkaController@zayvkaData')->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/{id}/delete', 'zayvkaController@zayvkaDelete')->middleware(['auth'])->name('zayvka-delete');

Route::get('/zayvka', function () {
    return view('zayvka');
})->middleware(['auth'])->name('zayvka');

Route::post('/zayvka/submit', 'zayvkaController@zayvkaSubmit')->middleware(['auth'])->name('zayvka-submit');

require __DIR__ . '/auth.php';
