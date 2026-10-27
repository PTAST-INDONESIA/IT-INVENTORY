<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
     public function logout(Request $request)
    {
        Auth::logout(); // hapus auth user

        $request->session()->invalidate(); // hapus session
        $request->session()->regenerateToken(); // refresh CSRF token

        return redirect('/login');
    }
}
