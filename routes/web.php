<?php

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


// ===== ADMIN AUTH ROUTES =====
Route::prefix('admin')->name('admin.')->group(function () {

    // Login Page (GET)
    Route::get('/login', function () {
        return view('pages.admin.login');
    })->name('login');

    // Login Submit (POST) — placeholder, handler will be built later
    Route::post('/login', function () {
        // TODO: implement AuthController@login
        return back()->with('error', 'Fitur login sedang dalam pengembangan.');
    })->name('login.post');

    // Register Page — placeholder
    Route::get('/register', function () {
        return back();
    })->name('register');

    // Forgot Password — placeholder
    Route::get('/forgot-password', function () {
        return back();
    })->name('password.request');

    // Logout — placeholder
    Route::post('/logout', function () {
        return redirect()->route('home');
    })->name('logout');

});
