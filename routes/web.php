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
})->name('/');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('detail-page', function () {
    return view('detail-page');
})->name('detail-page');

Route::get('listing-page', function () {
    return view('listing-page');
})->name('listing-page');

Route::get('services-detail', function () {
    return view('services-detail');
})->name('services-detail');