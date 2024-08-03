<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listado de Libros</h1>
<a href="{{route('libros.create')}}">Registrar Libros</a>
<table>
    <tr>
        <th>Titulo</th>
        <th>Edicion</th>
        <th>Editorial_id</th>
        <th>Pais</th>    
        <th>Precio</th>
        
       
    </tr>
@foreach ($libros as $libro)
<tr>
    <td>{{$libro->titulo}}</td>
    <td>{{$libro->edicion}}</td>
    <td>{{$libro->Editorial_id}}</td>
    <td>{{$libro->pais}}</td>
    <td>{{$libro->precio}}</td>
    
    <td><a href="{{route('libros.edit',$libro->id)}}">Editar</a></td>
    <td>
        <form action="{{route('libros.destroy',$libro->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
</table>    

</body>
</html>