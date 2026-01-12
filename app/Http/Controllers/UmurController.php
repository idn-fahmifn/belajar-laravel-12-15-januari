<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function formUmur()
    {
        return view('umur.form');
    }
}
