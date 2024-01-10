<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function () {
    return view('./cars.index');
});

Route::get('/manufacturers', function () {
    return view('./manufacturers.index');
});

Route::get('/cars/craete', function () {
    return view('./cars.craete');
});

Route::get('/cars/edit/{id}', function () {
    return view('./cars.edit');
});

Route::get('/cars/show/{id}', function () {
    return view('./cars.show');
});