<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;
use App\Http\Controllers\CandidatoController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-candidato', [CandidatoController::class, "cadastrarCandidato"]);  //CADASTRAR

Route::get('/mostrar-candidato/{id_candidato}', [CandidatoController::class, "mostrarCandidato"]);  //MOSTRAR

Route::get('/editar-candidato/{id_candidato}', [CandidatoController::class, "editarCandidato"]);  //EDITAR

Route::put('/atualizar-candidato/{id_candidato}', [CandidatoController::class, "atualizarCandidato"]);  //ATUALIZAR E ENVIAR

Route::delete('/excluir-candidato/{id_candidato}', [CandidatoController::class, "deletarCandidato"]);  //DELETAR 


