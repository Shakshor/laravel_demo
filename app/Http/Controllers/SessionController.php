<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    // create
    public function create()
    {
        return view("auth.login");
    }

    // store
    public function store()
    {
        dd(request()->all());
        // validate
        $validatedAttributes = request()->validate(['email' => ["required", "email"], "password" => ["required"]]);
        // attempt to login the user
        Auth::attempt($validatedAttributes);
        // if success, regenerate session token
        request()->session()->regenerate();
        // redirect
        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
