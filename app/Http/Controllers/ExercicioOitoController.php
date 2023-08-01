<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOitoController extends Controller
{
    public function exibirTabuada(Request $request)
    {
        $n1 = $request -> n1;
        $numeros = []; 

        for ($i = 1; $i <= 10; $i++) {
          array_push($numeros, $i * $n1);
        }

        return json_encode([
            'tabuada'=> $numeros
        ]);
    }
}
