<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Register user
    public function register(Request $request ){
        //validate
        $request->validate([
            'username'=> ['required','max:255'],
            'email'=> ['required','max:255','email'],
            'password'=> ['required','min:3', 'confirmed']
        ]);

        dd('passed validation');

        //Register

        //Login

        //Redirect
    }
}
