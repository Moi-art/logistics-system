<?php


Route::get('/', function () {
    return view('welcome');
     App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/dashboard', [PageController::class, 'dashboard']);

});
