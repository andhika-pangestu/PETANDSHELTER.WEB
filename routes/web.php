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

// Halaman Umum
Route::view('/welcome2', 'welcome2');
Route::view('/about', 'about')->name('about');
Route::view('/adopsi', 'adopsi')->name('adopsi');
Route::view('/volunteer', 'volunteer')->name('volunteer');
Route::view('/rescue', 'rescue')->name('rescue');
Route::view('/login', 'login')->name('login');
Route::view('/donasi', 'donasi');
Route::view('/form', 'form')->name('form');
Route::view('/thank', 'thank')->name('thank');
Route::get('/', function () {
    return view('welcome');
});

// Employees
Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
})->name('about');

// Donation Routes
Route::post('/finish', function(){
    return redirect()->route('welcome');
})->name('donation.finish');
Route::resource('/donations', DonationController::class)->only(['index', 'create', 'store']);

Route::get('/adopsi', function () {
    return view('adopsi');
})->name('adopsi');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/rescue', function () {
    return view('rescue');
})->name('rescue');

Route::get('/list', function () {
    return view('list');
})->name('list');

// Update route untuk halaman tips publik
Route::get('/tips', [TipsController::class, 'showPublic'])->name('tips');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/donasi', function () {
    return view('donasi');
});

Route::resource('/donations', DonationController::class, ['only' => ['index', 'create', 'store']]);

use App\Models\Acara;

// Kalender
Route::get('/kalender', function () {
    $acara = Acara::orderBy('created_at', 'desc')->get();
    return view('kalender', compact('acara'));
})->name('kalender');

// Dashboard Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Volunteer
    Route::view('/dashboard', 'dashboard')->middleware('volunteer')->name('dashboard');

    // Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('admin')->name('admin.dashboard');

    // Mitra
    Route::view('/mitra/dashboard', 'mitra.dashboard')->middleware('mitra')->name('mitra.dashboard');
});

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Acara Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('acara', [AcaraController::class, 'index'])->name('acara');
    Route::post('acara', [AcaraController::class, 'store'])->name('acara.store');
    Route::put('acara/{acara}', [AcaraController::class, 'update'])->name('acara.update');
    Route::delete('acara/{acara}', [AcaraController::class, 'destroy'])->name('acara.destroy');

    // Admin User Routes
    Route::get('user/{user}/edit', [AdminController::class, 'editUser'])->name('user.edit');
    Route::put('user/{user}', [AdminController::class, 'updateUser'])->name('user.update');
    Route::delete('user/{user}', [AdminController::class, 'deleteUser'])->name('user.delete');

    // Admin Tips Routes
    Route::get('tips', [TipsController::class, 'index'])->name('tips');
    Route::post('tips', [TipsController::class, 'store'])->name('tips.store');
    Route::put('tips/{tips}', [TipsController::class, 'update'])->name('tips.update');
    Route::delete('tips/{tips}', [TipsController::class, 'destroy'])->name('tips.destroy');
});

// Shelter Routes for Mitra
Route::middleware(['auth', 'mitra'])->prefix('mitra')->name('mitra.')->group(function () {
    Route::get('shelter', [ShelterController::class, 'index'])->name('shelter.index');
    Route::get('shelter/create', [ShelterController::class, 'create'])->name('shelter.create');
    Route::post('shelter', [ShelterController::class, 'store'])->name('shelter.store');
    Route::get('shelter/{shelter}/edit', [ShelterController::class, 'edit'])->name('shelter.edit');
    Route::put('shelter/{shelter}', [ShelterController::class, 'update'])->name('shelter.update');

    // Hewan Routes
    Route::resource('hewan', HewanController::class)->except(['show']);
});

// List Adopsi Routes
Route::get('/list', [ListAdopsiController::class, 'index'])->name('list');
Route::get('/shelter/{id}', [ListAdopsiController::class, 'show'])->name('shelter.show');


Route::get('/tips/{id}', [TipsController::class, 'show']);
// web.php
Route::get('/tips/{id}', [TipsController::class, 'show'])->name('tips.show');
