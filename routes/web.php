<?php

use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    
Route::middleware(['auth', 'verified'])->group(function() {
    Route::view('main', 'main')->name("main");

    Route::get('registrations', [RegistrationController::class, 'index'])->name('registration.index');
    
});


Route::middleware(['auth'])->group(function () {    
    Route::get('settings/profile', [Settings\ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [Settings\ProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('settings/profile', [Settings\ProfileController::class, 'destroy'])->name('settings.profile.destroy');
    Route::get('settings/password', [Settings\PasswordController::class, 'edit'])->name('settings.password.edit');
    Route::put('settings/password', [Settings\PasswordController::class, 'update'])->name('settings.password.update');
    Route::get('settings/appearance', [Settings\AppearanceController::class, 'edit'])->name('settings.appearance.edit');
});

require __DIR__.'/auth.php';
