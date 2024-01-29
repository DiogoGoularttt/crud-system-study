<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de candidatos</title>
</head>
<body>
    
    <h1>Atualização de Cadastro</h1>

    <form action="/atualizar-candidato/{{$candidato->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{$candidato->nome}}">

        <label for="">Email:</label>
        <input type="text" placeholder="Digite seu email" name="email_candidato" value="{{$candidato->email}}">

        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite seu telefone" name="telefone_candidato" value="{{$candidato->telefone}}">

        <label for="">Cidade:</label>
        <input type="text" placeholder="Digite sua cidade" name="cidade_candidato" value="{{$candidato->cidade}}">

        <button>Enviar cadastro</button>
    </form>

    <form action="/excluir-candidato/{{$candidato->id}}" method="POST" style="margin-top: 20px;">
        @csrf
        @method("DELETE")
        <button type="submit" style="background-color: red; color: white;">Excluir candidato</button>
    </form>
</body>
</html>