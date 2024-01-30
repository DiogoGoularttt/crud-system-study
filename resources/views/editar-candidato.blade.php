<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Sistema de candidatos</title>
</head>
<body class="flex flex-col items-center bg-sky-700">
    <div class="flex flex-col aligm-center mt-40 bg-neutral-50 rounded-3xl shadow-2xl p-12">
        <form action="/atualizar-candidato/{{$candidato->id}}" method="POST" class="flex flex-col gap-y-5">
            @csrf
            @method("PUT")
            <h1 class="text-center font-black text-3xl text-sky-700">Sistema de cadastro</h1>
            <div class="flex items-center gap-x-3">
                <label>Nome:</label>
                <input type="text" placeholder="Digite seu nome" name="nome_candidato" value="{{$candidato->nome}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <div class="flex items-center gap-x-4">
                <label>Email:</label>
                <input type="text" placeholder="Digite seu email" name="email_candidato" value="{{$candidato->email}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <div class="flex items-center gap-x-2">
                <label>Phone:</label>
                <input type="text" placeholder="Digite seu telefone" name="telefone_candidato" value="{{$candidato->telefone}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <div class="flex items-center gap-x-1">
                <label>Cidade:</label>
                <input type="text" placeholder="Digite sua cidade" name="cidade_candidato" value="{{$candidato->cidade}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Atualizar Cadastro</button>
        </form>
        <form action="/excluir-candidato/{{$candidato->id}}" method="POST" class="flex flex-col pt-3">
            @csrf
            @method("DELETE")
            <button type="submit" class="flex-none rounded-md bg-red-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Excluir Cadastro</button>



    </form>
    </div>
    
</body>
</html>