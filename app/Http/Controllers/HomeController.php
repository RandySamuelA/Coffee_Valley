<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $dailyBean = DB::table('daily_bean')
            ->join('beans', 'daily_bean.bean_id', '=', 'beans.id')
            ->where('daily_bean.sale_price', '>=', 0)
            ->select('beans.bean_name', 'beans.description', 'daily_bean.sale_price')
            ->first();

        return view('home', compact('dailyBean'));
    }
}