<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = DB::table('uploads')->get();
        return view('upload', compact('uploads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $filename = time() . '_' . $request->file('document_file')->getClientOriginalName();
        $request->file('document_file')->move(public_path('uploads'), $filename);

        DB::table('uploads')->insert([
            'title'         => $request->title,
            'document_file' => $filename,
            'author'        => $request->author,
        ]);

        return redirect()->route('upload');
    }
}