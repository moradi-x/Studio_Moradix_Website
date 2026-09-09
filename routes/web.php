<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return Inertia::render('Home');
});
Route::get('/about', function () {

    return Inertia::render('About');
});
Route::get('/projects', [

    ProjectController::class,
    'index'

]);
Route::get('/projects/{project:slug}', [

    ProjectController::class,
    'show'

]);
Route::get('/contact', function () {

    return Inertia::render('Contact');
});
Route::post('/contact', [

    ContactController::class,
    'store'

]);


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', [
        DashboardController::class,
        'index'
    ])->name('admin.dashboard');

    // Projects
    Route::resource('projects', AdminProjectController::class)
        ->except(['show']);    // Messages
        
    Route::get('/messages', [

        ContactMessageController::class,
        'index'

    ]);
    Route::delete('/messages/{message}', [

        ContactMessageController::class,
        'destroy'

    ]);
});
/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {


    Route::get('/profile', [

        ProfileController::class,
        'edit'

    ])->name('profile.edit');

    Route::patch('/profile', [

        ProfileController::class,
        'update'

    ])->name('profile.update');

    Route::delete('/profile', [

        ProfileController::class,
        'destroy'

    ])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
