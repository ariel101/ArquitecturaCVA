<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('correspondencia.store')}}" method="POST">
        @csrf
        <div>
        <label for="nombre">fecha</label>
        <input type="date" name="fecha" id="fecha"><br>
        <label for="nombre">remitente</label>
        <input type="text" name="remitente" id="remitente"><br>
        <label for="nombre">asunto</label>
        <input type="text" name="asunto" id="asunto"><br>
        <label for="nombre">cite</label>
        <input type="text" name="cite" id="cite"><br>
        
    </div>
    
    <div>
        <input type="submit" value="Registrar">
    </div>
    </form>
    
</body>
</html>