<?php

use App\Http\Controllers\ExercicioDois;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um',[ExercicioUm::class, 'multiplicar']);

Route::post('exercicio/dois',[ExercicioDois::class, 'retornarMaior']);

Route::post('exercicio/tres',
[ExercicioTresController::class, 'exibirMedia']);