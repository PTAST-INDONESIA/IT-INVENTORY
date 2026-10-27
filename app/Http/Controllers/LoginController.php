<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_form(Request $request){
        return view(view: 'auth/login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            /* if (Auth::user()->role_code == "QRCP"){
                //return redirect()->intended('/quickreceipt');
                //return redirect('/scan-document');
                return redirect()->intended('/');
            }else{
                return redirect()->intended('/');
            } */
             return redirect()->intended('/');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }
}
