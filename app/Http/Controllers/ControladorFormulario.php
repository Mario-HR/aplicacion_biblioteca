<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibros;
use Illuminate\Http\Request;

class ControladorFormulario extends Controller
{
    public function registrarLibro(validadorLibros $peticionValidada) {
        $libro = $peticionValidada->input("title");

        session()->flash('success', $libro.__("Book saved successfully"));
        return to_route('rutaForm');
    }
}
