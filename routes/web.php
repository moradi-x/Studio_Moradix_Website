<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;


Route::get('/', function () {
    return Inertia::render('Home');
});


Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/projects', [ProjectController::class, 'index']);


Route::get('/contact', function () {
    return Inertia::render('Contact');
});


// ذخیره فرم
Route::post('/contact', [ContactMessageController::class, 'store']);


// پنل پیام‌ها
Route::get(
    '/admin/messages',
    [ContactMessageController::class, 'index']
);

Route::prefix('admin')->group(function () {

    Route::resource('projects', AdminProjectController::class);
});



