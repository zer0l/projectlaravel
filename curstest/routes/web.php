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

Route::post('/submit', 'vikupController@vikupSubmit')->name('vikup-submit');
Route::post('/uslg-submit', 'vikupController@uslgSubmit')->name('uslg-submit');
Route::post('/catalog-submit', 'vikupController@zayvkaSubmit')->name('zayvka-submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/addCar', 'brandController@dateBrand')->middleware(['auth'])->name('addCar');

Route::post('/addCar/submit', 'carController@carSubmit')->middleware(['auth'])->name('car-submit');

Route::get('/addBrand', 'brandController@dbBrand')->middleware(['auth', 'access:admin'])->name('addBrand');

Route::post('/addBrand/submit', 'brandController@addCar')->middleware(['auth'])->name('brand-submit');
Route::post('/addModel/submit', 'brandController@addModel')->middleware(['auth'])->name('model-submit');


Route::get('/deleteCar', 'carController@delcatalogDate')->middleware(['auth'])->name('deleteCar');
Route::get('/deleteCar/{id}/delete', 'carController@delcatalogDelete')->middleware(['auth'])->name('car-delete');

Route::get('/clients', 'vikupController@dateClient')->middleware(['auth'])->name('clients');
Route::get('/clients/{id}/delete', 'vikupController@delClient')->middleware(['auth'])->name('deleteClient');

Route::get('/catalog', 'carController@catalogDate')->name('catalog');

Route::get('/servis', function () {
    return view('servis');
})->name('servis');

require __DIR__ . '/auth.php';
