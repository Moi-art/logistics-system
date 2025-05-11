<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');


// Customer Routes
Route::prefix('customer')->name('customer.')->group(function () {
    Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
    Route::get('/book', [CustomerController::class, 'bookRide'])->name('book');
    Route::get('/history', [CustomerController::class, 'history'])->name('history');
});

// Driver Routes
Route::prefix('driver')->name('driver.')->group(function () {
    Route::get('/dashboard', [DriverController::class, 'dashboard'])->name('dashboard');
    Route::get('/rides', [DriverController::class, 'rides'])->name('rides');
    Route::get('/profile', [DriverController::class, 'profile'])->name('profile');
});

// Booking Routes
Route::prefix('booking')->name('booking.')->group(function () {
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/store', [BookingController::class, 'store'])->name('store');
    Route::get('/list', [BookingController::class, 'list'])->name('list');
});

