<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BookNowController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PricingController;
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

Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::get('/book-now', [BookNowController::class, 'index']);
Route::get('/pricing', [PricingController::class, 'index']);
Route::post('/book-now', [BookNowController::class, 'store'])->name('booking.submit');
Route::post('/contact', [ContactUsController::class, 'submit'])->name('contact.submit');


