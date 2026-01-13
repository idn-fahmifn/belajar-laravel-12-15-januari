<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        return view('halaman.barang', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "halaman create";
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "halaman store";
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Barang::findOrFail($id);
        return view('halaman.detail-barang', compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "halaman edit";
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "halaman update";
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "halaman destroy";
        
    }
}
