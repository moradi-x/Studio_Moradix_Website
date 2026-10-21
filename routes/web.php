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
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ServicePageController;

Route::prefix('admin')->name('admin.')->group(function () {
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

// درباره ما  تماس با ما 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/services', [HomeController::class, 'services'])->name('services');



// سرویس ها (خدمت ها)  
Route::get('/services', [ServicePageController::class, 'index'])
    ->name('services');

Route::get('/services/web-design', [ServicePageController::class, 'webDesign'])
    ->name('services.web-design');

Route::get('/services/ecommerce', [ServicePageController::class, 'ecommerce'])
    ->name('services.ecommerce');

Route::get('/services/seo', [ServicePageController::class, 'seo'])
    ->name('services.seo');

Route::get('/services/redesign', [ServicePageController::class, 'redesign'])
    ->name('services.redesign');

Route::get('/services/custom-systems', [ServicePageController::class, 'customSystems'])
    ->name('services.custom-systems');




Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-us-form', [HomeController::class, 'contactUsForm'])->name('contact-us.form');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
