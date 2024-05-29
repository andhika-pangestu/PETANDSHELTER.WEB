<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});



Route::get('/', [DonationController::class, 'index'])->name('donation');
Route::post('/donation/store', [DonationController::class, 'submitDonation'])->name('donation.store');
Route::post('/notification/handler', [DonationController::class, 'notificationHandler'])->name('notification.handler');




