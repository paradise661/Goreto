<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.customer-login'); 
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email'    => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::guard('customer')->attempt($credentials)) {
        $request->session()->regenerate();

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Login successful',
                'redirect' => route('customer.dashboard')
            ]);
        }

        return redirect()->intended('/customer/dashboard');
    }

    if ($request->expectsJson()) {
        return response()->json([
            'message' => 'Invalid credentials.'
        ], 422);
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}


    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
