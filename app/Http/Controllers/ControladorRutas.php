<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRutas extends Controller
{
    public function home() {
        return view('principal');
    }
    public function form() {
        return view('registro_libros');
    }
}
