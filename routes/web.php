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
})->name('home');

Route::get('projects', function () {
    return view('projects');
})->name('projects');

Route::get('locations', function () {
    return view('locations');
})->name('locations');


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('blogsite', function () {
    return view('blogsite');
})->name('blog');

Route::get('contact', function () {
    return view('contact');
})->name('contact');