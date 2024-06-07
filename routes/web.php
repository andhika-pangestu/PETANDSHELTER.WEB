<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/welcome2', function () {
    return view('welcome2');
});

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::post('/finish', function(){
    return redirect()->route('welcome');
})->name('donation.finish');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adopsi', function () {
    return view('adopsi');
})->name('adopsi');


Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/rescue', function () {
    return view('rescue');
})->name('rescue');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/donations', function () {
    return view('donations.create');
});

Route::resource('/donations', \App\Http\Controllers\DonationController::class, ['only' => ['index', 'create', 'store']]);


Route::get('/kalender', function () {
    return view('kalender');
});





