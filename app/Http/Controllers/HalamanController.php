<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function halamanContoh()
    {
        $ucapan = "hallo saya sedang belajar Laravel.";
        return view('halaman.contoh', compact('ucapan'));
    }

    public function mobil($parameter)
    {
        $ucapan = 'Hallo saya punya mobil : ';
        $mobil =  $parameter;

        return view('halaman.mobil', compact('ucapan', 'mobil'));
    }

    public function kirim(Request $request)
    {
        // data apa saja yang dimasukan oleh user? 
        return $request;
    }
}
