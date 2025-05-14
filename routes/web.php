<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;

// ✅ Landing Page Route (Welcome)
Route::get('/', function () {
    return view('welcome');
})->name('landing');

// ✅ Admin Dashboard
Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');

// ✅ Customers Routes
Route::prefix('admin/customers')->name('admin.customers.')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('index');
    Route::get('/create', [CustomerController::class, 'create'])->name('create');
    Route::post('/', [CustomerController::class, 'store'])->name('store');
});

// ✅ Drivers Routes
Route::prefix('admin/drivers')->name('admin.drivers.')->group(function () {
    Route::get('/', [DriverController::class, 'index'])->name('index');
    Route::get('/create', [DriverController::class, 'create'])->name('create');
    Route::post('/', [DriverController::class, 'store'])->name('store');
});

// ✅ Bookings Routes
Route::prefix('admin/bookings')->name('admin.bookings.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');
});