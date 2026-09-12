<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\ProjectRequestController;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Http\Controllers\Admin\NotificationController;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Dashboard
        Route::get('/dashboard',  [DashboardController::class, 'index'])->name('dashboard');
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
        Route::get('/projects/{project}/images-edit',   [ProjectImageController::class, 'edit'])->name('projects.images.edit');
        Route::post('/projects/{project}/image-add', [ProjectImageController::class, 'add'])->name('projects.images.add');
        Route::delete('/projects/{project}/images-destroy', [ProjectImageController::class, 'destroy'])->name('projects.images.destroy');

        // notifications
        Route::get('/notifications',   [NotificationController::class, 'index'])->name('notifications.index');
        Route::patch('/notifications/{id}/read', [NotificationController::class, 'read'])->name('notifications.read');
        Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');
    });
