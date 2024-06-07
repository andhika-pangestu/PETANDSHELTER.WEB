<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/callback', [\App\Http\Controllers\Api\CallbackController::class, 'index'])->name('callback');
Route::get('/callback', [\App\Http\Controllers\Api\CallbackController::class, 'index'])->name('callback');