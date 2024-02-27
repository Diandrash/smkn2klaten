<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
        return view('auth.login', [
            'title' => 'Login Admin'
        ]);
    }
    public function register() 
    {
        return view('auth.register', [
            'title' => 'Register Page'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:3|max:30',
            'password' => 'required|min:3|max:30',
        ]);

        User::create($ValidatedData);
        Alert::success('Success', 'Please Login');
        return redirect()->intended('/login');
    }

    public function auth(Request $request)
    {
        $ValidatedData = $request->validate([
            'email' => 'required|min:3|max:30',
            'password' => 'required|min:3|max:30',
        ]);

        if (Auth::attempt($ValidatedData)) {
            $request->session()->regenerate();
            Alert::success('Success', 'Login Success');
            return redirect()->intended('/home');
        }

        Alert::error('Error', 'Email or Password Incorrect');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::success('Success', 'Logout Success');
        return redirect()->intended('/home');
    }
}
