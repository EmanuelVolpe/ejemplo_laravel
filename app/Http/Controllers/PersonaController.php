<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('personas.index');
    }
    public function crear()
    {
        return view('personas.crear');;
    }
    public function mostrar($id)
    {
        return view('personas.mostrar', compact('id'));
    }
}
