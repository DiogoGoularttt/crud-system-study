<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    public function cadastrarCandidato(Request $informacoes) {
        Candidato::create([
            'nome' => $informacoes->nome_candidato,
            'email' => $informacoes->email_candidato,
            'telefone' => $informacoes->telefone_candidato,
            'cidade' => $informacoes->cidade_candidato
        ]);    
        return redirect()->back()->with('success', 'Cadastro realizado com sucesso!');
    }

    public function mostrarCandidato($id_candidato) {
        $candidato = Candidato::findOrFail($id_candidato);
        echo $candidato->nome;
        echo "<br/>";
        echo $candidato->email;
        echo "<br/>";
        echo $candidato->telefone;
        echo "<br/>";
        echo $candidato->cidade;
    }

    public function editarCandidato($id_candidato) {
        $candidato = Candidato::findOrFail($id_candidato);
        return view('editar-candidato', ['candidato' => $candidato]);
    }

    public function atualizarCandidato(Request $informacoes, $id_candidato) {
        $candidato = Candidato::findOrFail($id_candidato);
        $candidato->nome = $informacoes->nome_candidato;
        $candidato->email = $informacoes->email_candidato;
        $candidato->telefone = $informacoes->telefone_candidato;
        $candidato->cidade = $informacoes->cidade_candidato;
        $candidato->save();
        return redirect('/')->with('success', 'Dados atualizados com sucesso!');
    }

    public function deletarCandidato($id_candidato) {
        $candidato = Candidato::findOrFail($id_candidato);
        $candidato->delete();
        return redirect('/')->with('success', 'Candidato excluído com sucesso!');
    }
    
}
