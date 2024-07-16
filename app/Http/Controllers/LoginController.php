<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/user/dashboard');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
