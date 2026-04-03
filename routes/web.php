<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ===== PUBLIC ROUTES =====
Route::get('/', function () {
    return view('pages.home');
})->name('home');


// ===== ADMIN AUTH ROUTES (guest only) =====
Route::prefix('admin')->name('admin.')->group(function () {

    // Login Page — redirect ke dashboard kalau sudah login
    Route::get('/login', function () {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('pages.admin.login');
    })->name('login');

    // Login Submit
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Forgot Password — placeholder
    Route::get('/forgot-password', function () {
        return back()->with('error', 'Fitur reset password belum tersedia.');
    })->name('password.request');


    // ===== PROTECTED ADMIN ROUTES =====
    Route::middleware('admin.auth')->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('pages.admin.dashboard');
        })->name('dashboard');

        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    });

});
