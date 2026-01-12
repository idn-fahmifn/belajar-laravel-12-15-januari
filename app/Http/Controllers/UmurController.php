<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function formUmur()
    {
        return view('umur.form');
    }

    public function proses(Request $request)
    {

        // buat sebuah session agar middleware bisa mengetahui umur yang user inputkan.
        $request->session()->put('age', $request->input('umur'));
        return redirect()->route('sukses.umur');
        
    }

    public function sukses()
    {
        return view('umur.sukses');
    }
}
