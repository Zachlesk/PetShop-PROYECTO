<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\UsersController;
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

Route::post('register', [UsersController::class, 'register']);
Route::post('login', [UsersController::class, 'login']);

Route::resource('mascotas', MascotaController::class);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [UsersController::class, 'logout']);
    Route::get('user', [UsersController::class, 'user']);
});
