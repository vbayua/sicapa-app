<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.create', [
            'roles' => Role::all(),
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:100|unique:users,username|min:3',
            // 'username' => ['required', 'max:100', 'min:3', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7',
            'role_id' => 'required'
        ]);

        // dd($attributes);
        $user = User::create($attributes);

        auth()->login($user);

        // session()->flash('success', 'Your account has been created');
        return redirect('/dashboard')->with('success', 'Your account has been created');
    }
}
