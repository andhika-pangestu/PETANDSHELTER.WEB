<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});




Route::get('/donate', [DonationController::class, 'showDonationPage']);
Route::post('/donate', [DonationController::class, 'processDonation']);
Route::post('/donate/notification', [DonationController::class, 'handleNotification']);

Route::get('/kalender', function () {
    return view('kalender');
});




