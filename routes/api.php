<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDois;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioQuatroController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('exercicio/um',[ExercicioUm::class, 'multiplicar']);

Route::post('exercicio/dois',[ExercicioDois::class, 'retornarMaior']);

Route::post('exercicio/tres',
[ExercicioTresController::class, 'exibirMedia']);

Route::post('exercicio/quatro',
[ExercicioQuatroController::class, 'verificarNumero']);

Route::post('exercicio/cinco',
[ExercicioCincoController::class, 'verificarDivisivel']);

Route::post('exercicio/seis',
[ExercicioSeisController::class, 'verificarIdade']);

Route::get('exercicio/sete',
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/oito',
[ExercicioOitoController::class, 'exibirTabuada']);