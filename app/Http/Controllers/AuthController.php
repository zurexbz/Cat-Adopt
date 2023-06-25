<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    protected function redirectTo($request){
        return route('login');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            if(Auth::user()->user_type){
                return redirect()->intended('/dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match with our records'
        ])->onlyInput('email');
    }

    public function newAcc(Request $request){
        if($request['password'] != $request['confirm_password']){
            return redirect()->intended('/register')->with('error', 'Password is not the same with confirm password');
        }

        $validatedData = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();

        DB::table('users')->insert($validatedData);

        return redirect()->intended('/login')->with('success', 'Your account has been registered successfully!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}