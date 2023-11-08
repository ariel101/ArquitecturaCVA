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
<a href="{{route('editorial.create')}}">Registrar editorial</a>
<table>
    <tr>
        <th>id</th>
        <th>Nombre</th>
      
        
       
    </tr>
@foreach ($editorial as $editor)
<tr>
    <td>{{$editor->id}}</td>
    <td>{{$editor->nombre}}</td>

    <td><a href="{{route('editorial.edit',$editor->id)}}">Editar</a></td>
    <td>
        <form action="{{route('editorial.destroy',$editor->id)}}" method="post">
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