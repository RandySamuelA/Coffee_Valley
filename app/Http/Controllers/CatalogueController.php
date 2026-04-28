<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CatalogueController extends Controller
{
    public function index()
    {
        if(!Session::has('user')){
            return redirect('/');
        }

        $beans = DB::table('beans')->get();

        return view('catalogue', compact('beans'));
    }
}