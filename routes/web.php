<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\ProjectController;
use App\Http\Controllers\Web\ContactController;

// admin
use App\Http\Controllers\Web\Admin\AuthController as AdminAuthController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);


// admin
Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');

});