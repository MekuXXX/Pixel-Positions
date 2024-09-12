<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\UserSessionController;
use Illuminate\Support\Facades\Route;


Route::controller(JobController::class)->group(function () {
  Route::get('/', 'index');
});

Route::controller(RegisterUserController::class)->group(function () {
  Route::get('/register', 'create');
  Route::post('/register', 'store');
})->middleware('guest');

Route::controller(UserSessionController::class)->group(function () {
  Route::middleware('guest')->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'store');
  });

  Route::post('/logout', 'destroy');
});
