<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de candidatos</title>
</head>
<body>
    
    <h1>Sistema de candidatos</h1>

    <form action="/cadastrar-candidato" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite seu nome" name="nome_candidato">

        <label for="">Email:</label>
        <input type="text" placeholder="Digite seu email" name="email_candidato">

        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite seu telefone" name="telefone_candidato">

        <label for="">Cidade:</label>
        <input type="text" placeholder="Digite sua cidade" name="cidade_candidato">

        <button>Enviar cadastro</button>
    </form>
</body>
</html>