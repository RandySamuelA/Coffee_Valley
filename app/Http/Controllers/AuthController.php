<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm(){
        return view('login');
    }
    public function login(Request $req){
        $user = DB::table('logins')
            ->where('user_id', $req->user)
            ->where('password', $req->pass)
            ->first();
    
        if($user){
            Session::put('user', $user->user_id);
            return redirect('/home');
        }
    
        dd("LOGIN GAGAL");
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}