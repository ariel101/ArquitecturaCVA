<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(isset($correspondencia))
        <p>ID de la tarifa actual: {{ $correspondencia->id }}</p>
    @else
        <p>La variable $tarifas no está definida o es nula.</p>
    @endif

    <form action="{{route('correspondencia.update',$correspondencia->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">fecha</label>
            <input type="date" name="nombre" id="fecha" value="{{$correspondencia->fecha}}
            "><br>
            <label for="nombre">remitente</label>
            <input type="text" name="remitente" id="remitente" value="{{$correspondencia->remitente}}
            "><br>
            <label for="nombre">asunto</label>
            <input type="text" name="asunto" id="asunto" value="{{$correspondencia->asunto}}
            "><br>
            <label for="nombre">cite</label>
            <input type="text" name="cite" id="cite" value="{{$correspondencia->cite}}
            "><br>
            <label for="nombre">destinatario</label>
            <input type="number" name="destinatario" id="destinatario" value="{{$correspondencia->destinatario_id}}
            "><br>
    </div>
    
    <div>
        <input type="submit" value="Actualizar">
    </div>
    </form>
    
</body>
</html>