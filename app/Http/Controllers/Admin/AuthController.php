<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Handle login form submission.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        // Find admin by username
        $admin = AdminUser::where('username', $request->username)
                          ->where('is_active', true)
                          ->first();

        // Verify credentials
        if (! $admin || ! Hash::check($request->password, $admin->password)) {
            return back()
                ->withInput($request->only('username'))
                ->with('error', 'Username atau kata sandi salah. Silakan coba lagi.');
        }

        // Log in via 'admin' guard and update last login
        Auth::guard('admin')->login($admin);
        $admin->update(['last_login_at' => now()]);

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard')
                         ->with('success', 'Selamat datang kembali, ' . $admin->name . '!');
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
                         ->with('success', 'Anda telah berhasil keluar.');
    }
}
