<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//display all cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

//display all manufacturers
Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');

//add new car form
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

//store new car
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

//display car (by id)
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::get('/cars/edit/{id}', function () {
    return view('./cars.edit');
});

Route::get('/cars/show/{id}', function () {
    return view('./cars.show');
});