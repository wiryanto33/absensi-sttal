<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\AuthController as ControllersAuthController;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/prajurit', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

// logout
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//satuan
Route::get('/satuan', [App\Http\Controllers\Api\SatuanController::class, 'show'])->middleware('auth:sanctum');

//checkin
Route::post('/checkin', [App\Http\Controllers\Api\AttendanceController::class, 'checkin'])->middleware('auth:sanctum');

//checkout
Route::post('/checkout', [App\Http\Controllers\Api\AttendanceController::class, 'checkout'])->middleware('auth:sanctum');

//is checkin
Route::get('/is-checkin', [App\Http\Controllers\Api\AttendanceController::class, 'isCheckedin'])->middleware('auth:sanctum');

//update profile
Route::post('/update-profile', [App\Http\Controllers\Api\AuthController::class, 'updateProfile'])->middleware('auth:sanctum');

//create permission
Route::apiResource('/api-permissions', App\Http\Controllers\Api\PermissionController::class)->middleware('auth:sanctum');

//note
Route::apiResource('/api-notes', App\Http\Controllers\Api\NoteController::class)->middleware('auth:sanctum');
