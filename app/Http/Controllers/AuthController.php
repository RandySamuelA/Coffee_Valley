<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('user_id')) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $user = DB::table('logins')
            ->where('user_id', $request->user_id)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            $request->session()->regenerate();
            session(['user_id' => $user->user_id]);
            return redirect()->route('home');
        }

        return back()->with('error', 'User ID atau Password salah!');
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('login');
    }
}