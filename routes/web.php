<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Customer Routes
Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
Route::get('/customer/book', [CustomerController::class, 'bookRide'])->name('customer.book');
Route::get('/customer/history', [CustomerController::class, 'history'])->name('customer.history');

// Driver Routes
Route::get('/driver/dashboard', [DriverController::class, 'dashboard'])->name('driver.dashboard');
Route::get('/driver/rides', [DriverController::class, 'rides'])->name('driver.rides');
Route::get('/driver/profile', [DriverController::class, 'profile'])->name('driver.profile');

// Booking Routes
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/list', [BookingController::class, 'list'])->name('booking.list');
