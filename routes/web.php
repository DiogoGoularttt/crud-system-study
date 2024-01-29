<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-candidato', function (Request $informacoes) {  //CADASTRAR
    Candidato::create([
        'nome' => $informacoes -> nome_candidato,
        'email' => $informacoes -> email_candidato,
        'telefone' => $informacoes -> telefone_candidato,
        'cidade' => $informacoes -> cidade_candidato
    ]);
    echo "Cadastro realizado com sucesso!";
});

Route::get('/mostrar-candidato/{id_candidato}', function ($id_candidato) {  //MOSTRAR
    $candidato = Candidato::findOrFail($id_candidato);
    
    echo $candidato->nome;
    echo "<br/>";
    echo $candidato->email;
    echo "<br/>";
    echo $candidato->telefone;
    echo "<br/>";
    echo $candidato->cidade;
});

Route::get('/editar-candidato/{id_candidato}', function ($id_candidato) {  //EDITAR
    $candidato = Candidato::findOrFail($id_candidato);
    return view('editar-candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id_candidato}', function (Request $informacoes, $id_candidato) {  //ATUALIZAR E ENVIAR
    $candidato = Candidato::findOrFail($id_candidato);

    $candidato->nome = $informacoes->nome_candidato;
    $candidato->email = $informacoes->email_candidato;
    $candidato->telefone = $informacoes->telefone_candidato;
    $candidato->cidade = $informacoes->cidade_candidato;
    $candidato->save();
    echo "Dados atualizado com sucesso!";
});

Route::delete('/excluir-candidato/{id_candidato}', function ($id_candidato) {
    $candidato = Candidato::findOrFail($id_candidato);
    $candidato->delete();
    return "Candidato excluído com sucesso!";
});


