<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function index()
    {
        $beans = DB::table('beans')->get();
        return view('catalogue', compact('beans'));
    }
}