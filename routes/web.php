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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/carreport', function () {
    return view('carreport');
})->name('carreport');
