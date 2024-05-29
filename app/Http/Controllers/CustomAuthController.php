<?php

namespace App\Http\Controllers;

use App\Events\LoginEvent;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => ['required', 'unique:users', 'min:5', 'max:50'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Successfully! Please Log In Now');
    }


    public function login()
    {
        if (Auth::check()) {
            return redirect('/admin');
        } else {
            return view('auth.login', [
                'title' => 'Login'
            ]);
        }

    }

    public function credentials(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login Gagal Boss');
    }

    public function authenticated(Request $request, $user)
    {
        // Access request data using $request object
        event(new LoginEvent($user->name, $user->email, $request->ip())); // Example usage

        $request = Request::capture(); // Capture current request
        $this->authenticated($request, $user);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
