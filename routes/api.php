<?php

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\LogoutController;
use App\Http\Controllers\Api\V1\Auth\PasswordUpdateController;
use App\Http\Controllers\Api\V1\Auth\ProfileController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\ParkingController;
use App\Http\Controllers\Api\V1\VehicleController;
use App\Http\Controllers\Api\V1\ZoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('auth/register', RegisterController::class);
Route::post('auth/login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('password', PasswordUpdateController::class)->name('password.update');
    Route::post('auth/logout', LogoutController::class)->name('logout');

    //for vehicles
    Route::apiResource('vehicles', VehicleController::class);

    //parking
    Route::get('parkings/active',[ParkingController::class,'active'])->name('parkings.active');
    Route::get('parkings/history',[ParkingController::class,'history'])->name('parkings.history');
    Route::post('parkings/start', [ParkingController::class, 'start'])->name('parking.start');
    Route::get('parkings/{parking}', [ParkingController::class, 'show'])->name('parking.show');
    Route::put('parkings/{parking}', [ParkingController::class, 'stop'])->name('parking.stop');
});

Route::get('zones', [ZoneController::class, 'index'])->name('zone.index');
