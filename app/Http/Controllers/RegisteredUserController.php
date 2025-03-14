<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate
        $validatedAttri = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password'=>['required', Password::min(6), 'confirmed']
        ]);

        // create user
        $user = User::create($validatedAttri);

        // login user
        Auth::login($user);

        // redirect
        return redirect('/');
    }
}
