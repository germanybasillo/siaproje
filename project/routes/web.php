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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/heroes', function () {
    return view('heroes');
})->name('heroes');

Route::get('/news', function () {
    return view('news');
})->name('news');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/tournaments', function () {
    return view('tournaments');
})->name('tournaments');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
