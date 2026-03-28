<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/privacy-policy', function() {
    return view('privacy');
})->name('privacy');

Route::get('/terms-of-service', function() {
    return view('terms');
})->name('terms');

Route::get('/services', function() {
    return view('services');
})->name('services');

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');
Route::view('/thank-you', 'thank-you')->name('thank.you');