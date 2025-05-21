<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\api\v1\HomeController;

Route::get('/version', [HomeController::class, 'getVersion'])->name('getVersion');

Route::get('/platform', [HomeController::class, 'getPlatform'])->name('getPlatform');

Route::get('/test_voice', [HomeController::class, 'testVoice'])->name('testVoice');

Route::get('/device_name', [HomeController::class, 'getDeviceName'])->name('getDeviceName');

Route::get('/shutdown', [HomeController::class, 'shutdown'])->name('shutdown');

Route::get('/restart', [HomeController::class, 'restart'])->name('restart');

Route::get('/sleep', [HomeController::class, 'sleep'])->name('sleep');

Route::get('/resume', [HomeController::class, 'resume'])->name('resume');

Route::get('/zkteco/roll_no', [HomeController::class, 'getRollNo']);

Route::post('/zkteco/users', [HomeController::class, 'getUsersById']);