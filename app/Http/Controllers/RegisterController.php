<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'unique:users,username', 'min:5'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'alpha_num', 'min:6'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        $credentials['password'] = Hash::make($credentials['password']);

        $user = User::create($credentials);

        auth()->login($user);

        return redirect()->intended('/');
    }
}
