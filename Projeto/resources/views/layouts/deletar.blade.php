<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" {{route ('excluir_personagems, ['id'=>$personagem->id])}}">
    @csrf 
    <label for="">Tem certeza?</label>
    <input type="text" name="personagem" id="personagem" value="{{$personagem->nome}}">
    <button type="submit">Sim</button>
</form>
</body>
</html>