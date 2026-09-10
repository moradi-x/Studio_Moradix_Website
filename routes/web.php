<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Http\Controllers\Admin\DashboardController;



Route::prefix('admin')
    ->name('admin.')
    ->group(function () {


        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


        // Categories
        Route::resource('categories', CategoryController::class);

        // Technologies


        // Projects


        // Services


        // Requests


        // Settings


    });
