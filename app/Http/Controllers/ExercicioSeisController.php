<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function verificarIdade(Request $request){
        if($request->n1 < 12){
        
            return json_encode([
                'resultado' => 'É uma criança'
            ]);
        }
       else if($request->n1 >= 12 && $request->n1 <= 18){
        
            return json_encode([
                'resultado' => 'É um adolescente'
            ]);
        }
         else {
            return json_encode([
                'resultado' => 'É um adulto'
            ]);
         }
    }
}
