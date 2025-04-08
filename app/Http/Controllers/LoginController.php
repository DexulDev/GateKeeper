<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        
        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed
            $request->session()->regenerate();
            
            $user = Auth::user();
            $username = $user->name;
            
            return redirect()->route('welcome')->with('username', $username);
        } else {
            return redirect()->route('error');
        }
    }

    public function register(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('registered');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
