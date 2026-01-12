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

        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:30'],
            'umur' => ['required', 'integer', 'min:1', 'max:100'],
        ], [
            'nama.required' => 'Kamu belum memasukan nama.',
            'nama.string' => 'Masukan nama yang benar.',
            'nama.min' => 'Masukan nama minimal 3 karakter.',
            'nama.max' => 'Masukan nama maksimal 30 karakter.',

            'umur.required' => 'Kamu belum memasukan umur.',
            'umur.string' => 'Masukan umur yang benar berupa angka.',
            'umur.min' => 'Masukan umur minimal 3 tahun.',
            'umur.max' => 'Masukan umur maksimal 100 tahun.',
        ]);

        // buat sebuah session agar middleware bisa mengetahui umur yang user inputkan.
        $request->session()->put('age', $request->input('umur'));
        return redirect()->route('sukses.umur');

    }

    public function sukses()
    {
        return view('umur.sukses');
    }
}
