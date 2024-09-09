<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/daily_income', function () {
    return view('daily_income');
})->middleware(['auth', 'verified'])->name('daily_income');

Route::get('/worksheet', function () {
    return view('worksheet');
})->middleware(['auth', 'verified'])->name('worksheet');

Route::get('/registration', function () {
    return view('registration');
})->middleware(['auth', 'verified'])->name('registration');

Route::get('/repairs', function () {
    return view('repairs');
})->middleware(['auth', 'verified'])->name('repairs');

Route::get('/searches', function () {
    return view('searches');
})->middleware(['auth', 'verified'])->name('searches');

Route::get('/acquisition', function () {
    return view('acquisition');
})->middleware(['auth', 'verified'])->name('acquisition');

Route::get('/wholesalers', function () {
    return view('wholesalers');
})->middleware(['auth', 'verified'])->name('wholesalers');

Route::get('/daily_closing', function () {
    return view('daily_closing');
})->middleware(['auth', 'verified'])->name('daily_closing');

Route::get('/cash_register', function () {
    return view('cash_register');
})->middleware(['auth', 'verified'])->name('cash_register');

Route::get('/statistics', function () {
    return view('statistics');
})->middleware(['auth', 'verified'])->name('statistics');

Route::get('/rank', function () {
    return view('rank');
})->middleware(['auth', 'verified'])->name('rank');

Route::get('/reminders', function () {
    return view('reminders');
})->middleware(['auth', 'verified'])->name('reminders');

Route::get('/accountant', function () {
    return view('accountant');
})->middleware(['auth', 'verified'])->name('accountant');

Route::get('/debts', function () {
    return view('debts');
})->middleware(['auth', 'verified'])->name('debts');

Route::get('/tools', function () {
    return view('tools');
})->middleware(['auth', 'verified'])->name('tools');

Route::get('/errors', function () {
    return view('errors');
})->middleware(['auth', 'verified'])->name('errors');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
