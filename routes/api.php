<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Front\PageController;

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
