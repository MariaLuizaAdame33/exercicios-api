<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function verificarDivisivel(Request $request){
        if($request->n1 % 4 == 0){
        
            return json_encode([
                'resultado' => 'Divisível'
            ]);
        }
         
         else{
            return json_encode([
                'resultado' => 'Não divisível'
            ]);
         }
    }
}
