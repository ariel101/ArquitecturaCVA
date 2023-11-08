<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('libros.store')}}" method="POST">
        @csrf
        <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo"><br>
        <label for="Editorial_id">Editorial_id</label>
        <input type="number" name="editorial_id" id="editorial_id"><br>
        <label for="edicion">Edicion</label>
        <input type="number" name="edicion" id="edicion"><br>
        <label for="pais">Pais</label>
        <input type="text" name="pais" id="pais"><br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">
    </div>
    
    <div>
        <input type="submit" value="Registrar">
    </div>
    </form>
    
</body>
</html>