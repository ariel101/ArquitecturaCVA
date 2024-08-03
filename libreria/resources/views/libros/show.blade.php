<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>titulo: {{$libros->titulo}}</li>
            <li>Editorial_id:{{$libros->editorial_id}}</li>
            <li>edicion:{{$libros->edicion}}</li>
            <li>pais:{{$libros->pais}}</li>
            <li>precio{{$libros->precio}}</li>
    </ul>
    
</body>
</html>