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

Route::get('/adopsi', function () {
    return view('adopsi');
})->name('adopsi');



Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/rescue', function () {
    return view('rescue');
})->name('rescue');

Route::get('/shelter', function () {
    return view('shelter');
})->name('shelter');

Route::get('/list', function () {
    return view('list');
})->name('list');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/donasi', function () {
    return view('donasi');
});

Route::resource('/donations', \App\Http\Controllers\DonationController::class, ['only' => ['index', 'create', 'store']]);


use App\Models\Acara;

Route::get('/kalender', function () {
    $acara = Acara::orderBy('created_at', 'desc')->get();
    return view('kalender', compact('acara'));
})->name('kalender');

Route::get('/form', function () {
    return view('form');
})->name('form');


Route::get('/thank', function () {
    return view('thank');
})->name('thank');

use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

//buat volunteer
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'volunteer'])->name('dashboard');

//buat admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');

//buat mitra
Route::get('/mitra/dashboard', function () {
    return view('mitra.dashboard');
})->middleware(['auth', 'verified',  'mitra'])->name('mitra.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\Admin\AcaraController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/acara', [AcaraController::class, 'index'])->name('admin.acara');
    Route::post('admin/acara', [AcaraController::class, 'store'])->name('admin.acara.store');
    Route::put('admin/acara/{acara}', [AcaraController::class, 'update'])->name('admin.acara.update');
    Route::delete('admin/acara/{acara}', [AcaraController::class, 'destroy'])->name('admin.acara.destroy');
});

use App\Http\Controllers\ShelterController;



Route::middleware(['auth', 'mitra'])->prefix('mitra')->name('mitra.')->group(function () {
    Route::get('shelter', [ShelterController::class, 'index'])->name('shelter.index');
    Route::get('shelter/create', [ShelterController::class, 'create'])->name('shelter.create');
    Route::post('shelter', [ShelterController::class, 'store'])->name('shelter.store');
    Route::get('shelter/{shelter}/edit', [ShelterController::class, 'edit'])->name('shelter.edit');
    Route::put('shelter/{shelter}', [ShelterController::class, 'update'])->name('shelter.update');
});


