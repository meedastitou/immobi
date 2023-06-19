<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        return view('backend.login');
    }
    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|max:100',
        ]);

        $credentials = ['email' => $validated['email'], 'password' => $validated['password']];
        if(Auth::attempt($credentials)){
            return redirect('/admin');
        }
        // var_dump(Auth::user());
    }
    public function logout(){
        auth()->logout();
       return redirect('/');
    }
}
