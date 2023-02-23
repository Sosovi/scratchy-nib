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
    return view('components.users.home');
});
Route::get('/gallery', function () {
    return view('components.users.gallery');
});
Route::get('/contact', function () {
    return view('components.users.contact');
});
Route::get('/about', function () {
    return view('components.users.about');
});
