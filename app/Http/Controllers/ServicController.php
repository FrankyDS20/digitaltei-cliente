<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicController extends Controller
{
    public function index()
    {
        $titulo = "Servicios";
        // $empresa = "DIGITALTEI";
        return view('servic.index',compact('titulo'));
    }
}
