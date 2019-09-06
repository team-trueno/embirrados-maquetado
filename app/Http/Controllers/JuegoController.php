<?php

namespace App\Http\Controllers;

use App\Juego;
use App\Pregunta;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function index()
    {
        return view('jugar.show');
    }

    public function siguientePregunta()
    {
        $preguntaRandom = Pregunta::inRandomOrder()->first();
        return view('jugar.show', compact($preguntaRandom));
    }
}
