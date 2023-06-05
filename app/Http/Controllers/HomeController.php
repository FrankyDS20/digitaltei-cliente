<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $titulo = "Inicio";
        // $empresa = "DIGITALTEI";
        return view('inicio.index',compact('titulo'));
    }
}
