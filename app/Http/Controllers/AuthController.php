<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register user
    public function register(Request $request ){
        //validate
        $fields=$request->validate([
            'username'=> ['required','max:255'],
            'email'=> ['required','max:255','email','unique:users'],
            'password'=> ['required','min:3', 'confirmed']
        ]);

        //Register
        $user=User::create($fields);

        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route('home');
    }

    //Login user
    public function login(Request $request){
        //validate
        $fields=$request->validate([
            'email'=> ['required','max:255','email'],
            'password'=> ['required']
        ]);

        //Try to login
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended();
        }
        else{
            return back()->withErrors([
                'failed'=>'Invalid credentials'
            ]);
        }

    }

    //Logout user
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
