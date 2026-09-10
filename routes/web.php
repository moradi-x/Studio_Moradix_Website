<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\ProjectRequestController;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        // Categories CRUD
        Route::resource('categories', CategoryController::class);
        // Technologies
        Route::resource('technologies', TechnologyController::class);
        // Projects
        // Route::resource('projects', ProjectController::class);
        // Services
        Route::resource('services', ServiceController::class);
        // Requests
        Route::resource('project-requests', ProjectRequestController::class);
        // Settings 
        Route::resource('settings', SettingController::class);
    });
