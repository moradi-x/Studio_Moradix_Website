<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\ProjectRequestController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectImageController;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // Categories CRUD
        Route::resource('categories', CategoryController::class);
        // Technologies
        Route::resource('technologies', TechnologyController::class);
        // Services
        Route::resource('services', ServiceController::class);
        // Requests
        Route::resource('project-requests', ProjectRequestController::class);
        // Settings 
        Route::resource('settings', SettingController::class);
        // Projects

        Route::resource('projects', ProjectController::class);

        // edit project images
        Route::get('/projects/{project}/images-edit',  [ProjectImageController::class, 'edit'])->name('projects.images.edit');
        Route::delete('/projects/{project}/images-destroy', [ProjectImageController::class, 'destroy'])->name('projects.images.destroy');
        Route::put('/projects/{project}/images-set-edit',  [ProjectImageController::class, 'setPrimary'])->name('projects.images.set_primary');
        Route::post('/projects/{project}/image-add', [ProjectImageController::class, 'add'])->name('projects.images.add');
    });
