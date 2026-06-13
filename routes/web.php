<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('villa-salibu.home');
})->name('home');

Route::get('/villa1', function () {
    return view('frontend.villa1.home');
});

Route::get('/villa2', function () {
    return view('frontend.villa2.home');
});

Route::get('/villa3', function () {
    return view('frontend.villa3.home');
});

require __DIR__ . '/auth.php';
