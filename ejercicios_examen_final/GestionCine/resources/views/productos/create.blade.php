<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio">
       
    </div>
    
    <div>
        <input type="submit" value="Registrar">
    </div>
    </form>
    
</body>
</html>