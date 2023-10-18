<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function view_login()
    {
        return view('login');
    }
    public function admin()
    {
        return view('admin');
    }
    public function subscriber()
    {
        return view('subscriber');
    }
   
    public function authenticate(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {

            $request->session()->regenerate();
            return auth()->user()->role == 1 ? to_route('admin') : to_route('subscriber');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
