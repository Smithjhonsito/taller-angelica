<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    
    public function storePreguntas(Request $request)
    {
        $request->validate([
            'pregunta1'  => 'required',
            'pregunta2'  => 'required',
            'pregunta3'  => 'required',
            'pregunta4'  => 'required',
            'pregunta5'  => 'required',
            'pregunta6'  => 'required',
            'pregunta7'  => 'required',
            'pregunta8'  => 'required',
            'pregunta9'  => 'required',
            'pregunta10'  => 'required',

          ]);

        Pregunta::create([
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'pregunta4' => $request->pregunta4,
            'pregunta5' => $request->pregunta5,
            'pregunta6' => $request->pregunta6,
            'pregunta7' => $request->pregunta7,
            'pregunta8' => $request->pregunta8,
            'pregunta9' => $request->pregunta9,
            'pregunta10' => $request->pregunta10,
      
          ]);
      
          return redirect()->route('menu.menu')->with('subir', 'ok');

    }

}
