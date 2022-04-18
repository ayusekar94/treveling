<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index(){
        return view('frontend.login.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt( $validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration Successfull');
        return redirect('/login')->with('success', 'Registration Successfull');
    }

}
