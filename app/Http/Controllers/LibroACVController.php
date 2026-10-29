<?php

namespace App\Http\Controllers;

use App\Models\LibroACV;

class LibroACVController extends Controller
{
    public function index()
    {
        $libros = LibroACV::all();

        return view('libros.index', compact('libros'));
    }
}
