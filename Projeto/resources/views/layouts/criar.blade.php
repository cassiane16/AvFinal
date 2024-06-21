<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Personagem</title>
</head>
<body>
    <form action="{{route('personagem.store')}}" method="post"></form>
    @csrf
    <label>Nome Personagem</label>
    <input type="text" name="nome" id="nome">
    <button type="sumit">Cadastrar</button>
</body>
</html>