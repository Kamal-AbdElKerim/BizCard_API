<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\BusinessCardController;

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




    Route::post('register', [UserAuthController::class, 'register']);
    Route::post('login', [UserAuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('logout', [UserAuthController::class, 'logout']);

    // CRUD operations for business cards

    Route::get('/business_cards', [BusinessCardController::class, 'getAllBusinessCards']);
    Route::post('/createBusinessCard', [BusinessCardController::class, 'createBusinessCard']);
    Route::post('/updateBusinessCard/{id}', [BusinessCardController::class, 'updateBusinessCard']);
    Route::get('/deleteBusinessCard/{id}', [BusinessCardController::class, 'deleteBusinessCard']);
});
