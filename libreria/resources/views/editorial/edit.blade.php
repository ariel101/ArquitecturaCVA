<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(isset($editorial))
        <p>ID de la tarifa actual: {{ $editorial->id }}</p>
    @else
        <p>La variable $tarifas no está definida o es nula.</p>
    @endif

    <form action="{{route('editorial.update',$editorial->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{$editorial->nombre}}"><br>
            
    </div>
    
    <div>
        <input type="submit" value="Actualizar">
    </div>
    </form>
    
</body>
</html>