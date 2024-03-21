<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($attributes);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/dashboard')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'email' => 'provided credentials cannot be verified!',
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
