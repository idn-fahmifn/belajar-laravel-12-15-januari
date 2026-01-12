<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "halaman index";
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
    public function show(string $id)
    {
        return "halaman detail";
        
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
