<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Personagem</title>
</head>
<body>
    <form action="{{route('cadastrar_personagems')}}" method="post">
    @csrf
    <label>Nome Personagem</label>
    <input type="text" name="nome" id="nome">
    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>