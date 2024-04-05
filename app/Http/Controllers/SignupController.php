<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function create()
    {
        return view('signup', [
            'title' => 'Sign Up',
            'active' => 'signup',
        ]);
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'email' => 'required|email:dns|max:255|unique:users',
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $payload['password'] = Hash::make($payload['password']);

        User::create($payload);

        return redirect('/login');
    }
}
