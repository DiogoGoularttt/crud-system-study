<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    public function cadastrarCandidato(Request $informacoes) {
        Candidato::create([
            'nome' => $informacoes -> nome_candidato,
            'email' => $informacoes -> email_candidato,
            'telefone' => $informacoes -> telefone_candidato,
            'cidade' => $informacoes -> cidade_candidato
        ]);
        echo "Cadastro realizado com sucesso!";
    }
}
