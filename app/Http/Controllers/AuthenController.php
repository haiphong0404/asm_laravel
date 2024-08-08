<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function showFormLogin()
    {
        return view("auth.login");
    }

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function handleLogin()
    {
        $credentials = \request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            }
            return redirect()->intended(route('member.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function handleRegister()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::query()->create($data);
        Auth::login($user);
        request()->session()->regenerate();
        return redirect()->route('member.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
