<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('alterar_personagems', ['id'=>$personagem->id])}}" method="post">
    <label for="">Personagem</label>
    <input type="text" name="personagem" id="personagem" value="{{$personagem->nome}}">
    </form>
    
</body>
</html>