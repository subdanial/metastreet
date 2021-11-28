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
    return view('dashboard');
})->name('dashboard');


Route::get('/empty', function () {
    return view('empty');
})->name('empty');

Route::get('/nft', function () {
    return view('nft');
})->name('nft');

Route::get('/referral', function () {
    return view('referral');
})->name('referral');

Route::get('/presell', function () {
    return view('presell');
})->name('presell');

Route::get('/gameplay', function () {
    return view('gameplay');
})->name('gameplay');
