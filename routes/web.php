<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [App\Http\Controllers\PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('exercises', App\Http\Controllers\ExerciseController::class)
    ->middleware('auth:sanctum');

Route::post('/reservations', [App\Http\Controllers\ReservationController::class, 'store'])
    ->middleware('auth:sanctum');