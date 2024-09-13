<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserSessionController;
use Illuminate\Support\Facades\Route;


Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::controller(JobController::class)->group(function () {
  Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
  });
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
