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

Route::get('/', 'carController@welcomePaginate')->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/addCar', 'brandController@dateBrand')->middleware(['auth'])->name('addCar');
Route::post('/addCar/submit', 'carController@carSubmit')->middleware(['auth'])->name('car-submit');

Route::get('/addBrand', function () {
    return view('addBrand');
})->middleware(['auth', 'access:admin'])->name('addBrand');
Route::post('/addBrand/submit', 'brandController@addCar')->middleware(['auth'])->name('brand-submit');

Route::get('/clients', function () {
    return view('clients');
})->middleware(['auth'])->name('clients');


require __DIR__ . '/auth.php';
