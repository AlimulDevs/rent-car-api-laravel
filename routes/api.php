<?php

use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\RentDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/car", [CarController::class, 'GetCar']);
Route::get("/car/{id}", [CarController::class, 'GetCarByID']);
Route::post("/car/create", [CarController::class, 'CreateCar']);

Route::get("rent-detail", [RentDetailController::class, 'GetAllRentDetail']);
Route::post("rent-detail/create", [RentDetailController::class, 'CreateRentDetail']);
