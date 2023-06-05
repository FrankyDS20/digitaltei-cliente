<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $titulo = "Contactanos";
        // $empresa = "DIGITALTEI";
        return view('contactanos.index',compact('titulo'));
    }
}