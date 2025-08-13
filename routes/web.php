<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\UserController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Resource routes
Route::resource('appointments', AppointmentController::class);
Route::resource('mealplans', MealPlanController::class);
Route::resource('users', UserController::class);
Route::resource('patients', PatientController::class)->middleware(['auth']);

// Authentication routes
Auth::routes(['verify' => true]);

// Additional routes
Route::get('/home', [DashboardController::class, 'index'])->name('home');       

Route::get('/sidebar', [SidebarController::class, 'index'])->name('sidebar');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');       

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');

Route::resource('appointments', AppointmentController::class);

Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
Route::resource('patients', PatientController::class)->middleware(['auth']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
