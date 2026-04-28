<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = DB::table('distributors')->get();
        return view('distributors.index', compact('distributors'));
    }

    public function create()
    {
        return view('distributors.create');
    }

    public function store(Request $request)
    {
        DB::table('distributors')->insert([
            'distributor_name' => $request->name,
            'city'             => $request->city,
            'state_region'     => $request->region,
            'country'          => $request->country,
            'phone'            => $request->phone,
            'email'            => $request->email,
        ]);
        return redirect()->route('distributors.index');
    }

    public function edit($id)
    {
        $distributor = DB::table('distributors')->where('id', $id)->first();
        return view('distributors.edit', compact('distributor'));
    }

    public function update(Request $request, $id)
    {
        DB::table('distributors')->where('id', $id)->update([
            'distributor_name' => $request->name,
            'city'             => $request->city,
            'state_region'     => $request->region,
            'country'          => $request->country,
            'phone'            => $request->phone,
            'email'            => $request->email,
        ]);
        return redirect()->route('distributors.index');
    }
}