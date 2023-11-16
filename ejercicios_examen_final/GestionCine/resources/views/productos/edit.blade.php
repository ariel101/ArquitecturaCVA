<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(isset($productos))
        <p>ID de la tarifa actual: {{ $productos->id }}</p>
    @else
        <p>La variable $tarifas no está definida o es nula.</p>
    @endif

    <form action="{{route('productos.update',$productos->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio">
    </div>
    
    <div>
        <input type="submit" value="Actualizar">
    </div>
    </form>
    
</body>
</html>