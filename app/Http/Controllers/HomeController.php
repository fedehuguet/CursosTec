<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = \App\Curso::take(3)->get();
        return view('welcome')->with('cursos', $cursos);
    }
}
