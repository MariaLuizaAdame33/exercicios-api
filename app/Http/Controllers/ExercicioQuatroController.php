<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioQuatroFormRequest;
use Illuminate\Http\Request;

class ExercicioQuatroController extends Controller
{
    public function verificarNumero(ExercicioQuatroFormRequest $request){
        if($request->numero % 2 == 0){
            return json_encode([
                'mensagem' => 'Par'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'Ímpar'
            ]);
        }
    }
}
