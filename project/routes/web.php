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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


Route::name('joinNow.')->group(function () {
    Route::get('/bam', function () {
         return view('bam');
    })->name('bam');
     Route::get('/ersvp', function () {
         return view('ersvp');
    })->name('ersvp');
     Route::get('/ml', function () {
         return view('ml');
    })->name('ml');
});

