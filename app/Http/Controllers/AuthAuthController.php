<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthAuthController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle Login Request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin')->with('success', 'Logged in successfully');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function showRegisterForm()
{
    return view('auth.register'); // Ensure resources/views/auth/register.blade.php exists
}


public function register(Request $request)
{
    $user = new User;

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password); // Hashing password
    $user->role = $request->role ?? 'user'; // Default role set to 'user' if not provided
    $user->save();

    // Redirect to login page with success message
    return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
}

    // Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
