<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AcaraController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TipsController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\ListAdopsiController;
use App\Http\Controllers\RescueFormController;
use App\Http\Controllers\AdopsiController;
use App\Http\Controllers\ShelterViewController;
use App\Models\Acara;

// Halaman Umum
Route::view('/welcome2', 'welcome2');
Route::view('/about', 'about')->name('about');
Route::view('/donasi', 'donasi');
Route::view('/form', 'form')->name('form');
Route::view('/thank', 'thank')->name('thank');
Route::view('/', 'welcome');

// Employees
Route::get('/employees', [EmployeeController::class, 'index']);

// Donation Routes

Route::resource('/donations', DonationController::class)->only(['index', 'create', 'store']);

// Rescue Form Routes
Route::get('/rescue', [RescueFormController::class, 'create'])->name('rescue.create');
Route::post('/rescue', [RescueFormController::class, 'store'])->name('rescue.store');
Route::get('/rescue', [RescueFormController::class, 'index'])->name('rescue');

// Kalender
Route::get('/kalender', function () {
    $acara = Acara::orderBy('created_at', 'desc')->get();
    return view('kalender', compact('acara'));
})->name('kalender');

// List Adopsi Routes
Route::get('/list', [ListAdopsiController::class, 'index'])->name('list');
Route::get('/shelter/{id}', [ListAdopsiController::class, 'show'])->name('shelter.show');

// Adopsi Routes for Public
Route::get('adopsi/{hewan}/create', [AdopsiController::class, 'create'])->name('adopsi.create');
Route::post('adopsi/{hewan}', [AdopsiController::class, 'store'])->name('adopsi.store');

// Tips
Route::get('/tips', [TipsController::class, 'showPublic'])->name('tips.index');
Route::get('/tips/{id}', [TipsController::class, 'show'])->name('tips.show');

// Authentication Routes
require __DIR__ . '/auth.php';

// Show shelter
Route::get('/shelter', [ShelterViewController::class, 'showShelterData']);
Route::get('/search', [ShelterViewController::class, 'search'])->name('search.shelters');

// Authentication Middleware
Route::middleware(['auth', 'verified'])->group(function () {
    // Volunteer
    Route::middleware('volunteer')->group(function () {
        Route::get('/volunteer/dashboard', [RescueFormController::class, 'dashboard'])->name('volunteer.dashboard');
        Route::post('assignJob', [RescueFormController::class, 'assignJob'])->name('assignJob');
        Route::get('/assigned-jobs', [RescueFormController::class, 'showAssignedJobs'])->name('assigned-jobs');
        Route::post('/jobs/complete/{id}', [RescueFormController::class, 'complete'])->name('jobs.complete');
    });

    // Admin
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('acara', [AcaraController::class, 'index'])->name('acara');
        Route::post('acara', [AcaraController::class, 'store'])->name('acara.store');
        Route::put('acara/{acara}', [AcaraController::class, 'update'])->name('acara.update');
        Route::delete('acara/{acara}', [AcaraController::class, 'destroy'])->name('acara.destroy');
        Route::get('user/{user}/edit', [AdminController::class, 'editUser'])->name('user.edit');
        Route::put('user/{user}', [AdminController::class, 'updateUser'])->name('user.update');
        Route::delete('user/{user}', [AdminController::class, 'deleteUser'])->name('user.delete');
        Route::get('tips', [TipsController::class, 'index'])->name('tips');
        Route::post('tips', [TipsController::class, 'store'])->name('tips.store');
        Route::put('tips/{tips}', [TipsController::class, 'update'])->name('tips.update');
        Route::delete('tips/{tips}', [TipsController::class, 'destroy'])->name('tips.destroy');
    });

    // Mitra
    Route::middleware('mitra')->prefix('mitra')->name('mitra.')->group(function () {
        Route::get('dashboard', function () {
            return view('mitra.dashboard');
        })->name('dashboard');
        Route::get('shelter', [ShelterController::class, 'index'])->name('shelter.index');
        Route::get('shelter/create', [ShelterController::class, 'create'])->name('shelter.create');
        Route::post('shelter', [ShelterController::class, 'store'])->name('shelter.store');
        Route::get('shelter/{shelter}/edit', [ShelterController::class, 'edit'])->name('shelter.edit');
        Route::put('shelter/{shelter}', [ShelterController::class, 'update'])->name('shelter.update');
        Route::resource('hewan', HewanController::class)->except(['show']);
        Route::get('shelter/adopted_pets', [ShelterController::class, 'showAdoptedPets'])->name('shelter.adopted_pets');
        Route::get('adopsi', [AdopsiController::class, 'index'])->name('adopsi.index');
        Route::post('adopsi/{adopsi}/approve', [AdopsiController::class, 'approve'])->name('adopsi.approve');
        Route::post('adopsi/{adopsi}/reject', [AdopsiController::class, 'reject'])->name('adopsi.reject');
        Route::get('approved-adopsi', [AdopsiController::class, 'showApprovedAdopsi'])->name('approved_adopsi.index');
        Route::post('approved-adopsi/{adopsi}/teradopsi', [AdopsiController::class, 'teradopsi'])->name('adopsi.teradopsi');
        Route::post('approved-adopsi/{adopsi}/cancel', [AdopsiController::class, 'cancel'])->name('adopsi.cancel');
    });

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
});
