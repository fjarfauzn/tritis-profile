<?php

namespace App\Http\Controllers;

use App\Models\Potensi;

class PotensiController extends Controller
{
    public function index()
    {
        $potensis = Potensi::latest()->get();

        return view('potensi', compact('potensis'));
    }
}