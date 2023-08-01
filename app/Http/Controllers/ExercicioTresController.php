<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function exibirMedia(Request $request){
        $n1 = $request-> n1;
        $n2 = $request-> n2;
        $n3 = $request-> n3;
        return json_encode([
            'resultado' => ($n1 + $n2 + $n3) /3
        ]);
    }
}
