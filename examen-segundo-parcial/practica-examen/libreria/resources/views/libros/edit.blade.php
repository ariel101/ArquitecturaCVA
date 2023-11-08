<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(isset($libros))
        <p>ID de la tarifa actual: {{ $libros->id }}</p>
    @else
        <p>La variable $tarifas no está definida o es nula.</p>
    @endif

    <form action="{{route('libros.update',$libros->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" value="{{$libros->titulo}}"><br>
            <label for="Editorial_id">Editorial_id</label>
            <input type="number" name="editorial_id" id="editorial_id" value="{{$libros->editorial_id}}"><br>
            <label for="edicion">Edicion</label>
            <input type="text" name="edicion" id="edicion" value="{{$libros->edicion}}"><br>
            <label for="pais">Pais</label>
            <input type="text" name="pais" id="pais" value="{{$libros->pais}}"><br>
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" value="{{$libros->precio}}">
    </div>
    
    <div>
        <input type="submit" value="Actualizar">
    </div>
    </form>
    
</body>
</html>