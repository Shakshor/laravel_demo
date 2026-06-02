<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //create
    public function create()
    {
        return view('auth.register');
    }

    // store
    public function store()
    {
        $validatedUser = request()->validate([
            'first_name' => ["required", "max:255",],
            'last_name' => ["required", "max:255",],
            'email' => ["required", "email"],
            'password' => ["required", Password::min(6)->numbers(), "confirmed"],
        ]);

        $user = User::create($validatedUser);

        Auth::login($user);

        return redirect("/jobs");
    }
}


 // steps to check the register process
 /* 
   * validate the user
   * db store or create the user
   * login
   * redirect
 */
