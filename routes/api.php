<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Front\PageController;
use App\Http\Controllers\Api\Front\ServiceController;
use App\Http\Controllers\Api\Front\ProjectController;
use App\Http\Controllers\Api\Front\ContactController;

// admin v1
use App\Http\Controllers\Api\V1\Admin\AuthController as ApiAdminAuthController;

/*
|--------------------------------------------------------------------------
| Default Auth API Route (keep it)
|--------------------------------------------------------------------------
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/*
|--------------------------------------------------------------------------
| Front APIs - Version 1
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {

    // Pages
    Route::get('/home', [PageController::class, 'home']);
    Route::get('/about', [PageController::class, 'about']);

    // Services
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/services/{slug}', [ServiceController::class, 'show']);

    // Projects
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/projects/{slug}', [ProjectController::class, 'show']);

    // Contact
    Route::post('/contact', [ContactController::class, 'store']);
});


// admin v1
Route::prefix('v1/admin')->group(function () {

    Route::post('/login', [ApiAdminAuthController::class, 'login']);

});