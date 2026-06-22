<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');

Route::get('/special-offers', function () {
    return view('frontend.special-offers');
})->name('special-offers');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/reservation-step-1', function () {
    return view('frontend.reservation-step-1');
})->name('reservation-step-1');

Route::get('/reservation-step-2', function () {
    return view('frontend.reservation-step-2');
})->name('reservation-step-2');

Route::get('/reservation-step-2', function () {
    return view('frontend.reservation-step-2');
})->name('privacy-policy');

require __DIR__ . '/auth.php';
