<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $titulo = "Nosotros";
        // $empresa = "DIGITALTEI";
        return view('nosotros.index',compact('titulo'));
    }
}
