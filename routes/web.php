<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorRutas;
use App\Http\Controllers\ControladorFormulario;

Route::get('/', [ControladorRutas::class, 'home'])->name('rutaPrincipal');

Route::get('/form', [ControladorRutas::class, 'form'])->name('rutaForm');

Route::post('/registrarLibro', [ControladorFormulario::class, 'registrarLibro'])->name('registrarLibro');