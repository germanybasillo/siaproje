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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/event', function () {
//     return view('event');
// })->name('event');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');


// Route::name('joinNow.')->group(function () {
//     Route::get('/bam', function () {
//          return view('bam');
//     })->name('bam');
//      Route::get('/ersvp', function () { 
//          return view('ersvp');
//     })->name('ersvp');
//      Route::get('/ml', function () {
//          return view('ml');
//     })->name('ml');
//     Route::get('/register', function () {
//         return view('register');
//    })->name('register');
// });



// Controller
// use App\Http\Controllers\PagesController;

// Route::get('/', [PagesController::class, 'welcome']);
// Route::get('/home', [PagesController::class, 'home']);
// Route::get('/about', [PagesController::class, 'about']);
// Route::get('/contact', [PagesController::class, 'contact']);
// Route::get('/event', [PagesController::class, 'event']);
// Route::get('/blog', [PagesController::class, 'blog']);
// Route::get('/bam', [PagesController::class, 'bam']);
// Route::get('/ersvp', [PagesController::class, 'ersvp']);
// Route::get('/ml', [PagesController::class, 'ml']);
// Route::get('/login', [PagesController::class, 'login']);
// Route::get('/register', [PagesController::class, 'register']);


use App\Http\Controllers\PagesController;

Route::prefix('/')->group(function () {
    Route::get('/', [PagesController::class, 'welcome']);
    Route::get('home', [PagesController::class, 'home']);
    Route::get('about', [PagesController::class, 'about']);
    Route::get('contact', [PagesController::class, 'contact']);
    Route::get('event', [PagesController::class, 'event']);
    Route::get('blog', [PagesController::class, 'blog']);
    Route::get('bam', [PagesController::class, 'bam']);
    Route::get('ersvp', [PagesController::class, 'ersvp']);
    // Route::get('ml', [PagesController::class, 'ml']);
    // Route::get('register', [PagesController::class, 'register']);
});

use App\Http\Controllers\CustomAuthController;
 Route::get('ml', [CustomAuthController::class, 'ml']);
    Route::get('register', [CustomAuthController::class, 'register']);
