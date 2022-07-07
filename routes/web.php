<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsesController;
use App\Http\Controllers\WelcomePageController;

Route::get('/', WelcomePageController::class)->name('homepage');
Route::get('/uses', UsesController::class)->name('uses');
