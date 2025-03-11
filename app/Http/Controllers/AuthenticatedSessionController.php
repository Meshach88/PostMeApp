<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, your credentials do not match',
            ]);
        }

        // regenerate session tokens
        $request->session()->regenerate();

        // redirect
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }
}
