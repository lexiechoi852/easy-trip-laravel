<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ScheduleItemController;
use App\Http\Controllers\TripItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout',  [UserController::class, 'logout']);

    Route::apiResource('attractions', AttractionController::class);

    Route::apiResource('trips', TripController::class);
    
    Route::get('trips/user/{id}', [TripController::class, 'getForUser']);
    
    Route::get('schedule-items/trip/{id}', [ScheduleItemController::class, 'getForTrip']);
    
    Route::apiResource('schedule-items', ScheduleItemController::class);
    
    Route::get('trip-items/trip/{id}', [TripItemController::class, 'getForTrip']);
    
    Route::apiResource('trip-items', TripItemController::class);    
});

Route::post('signup',  [UserController::class, 'store']);

Route::post('login',  [UserController::class, 'login']);

