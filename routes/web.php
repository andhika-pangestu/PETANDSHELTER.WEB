<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);
