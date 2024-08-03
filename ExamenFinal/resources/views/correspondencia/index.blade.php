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
<a href="{{route('correspondencia.create')}}">Registrar Correspondencia</a>
<table>
    <tr>
        <th>id</th>
        <th>fecha</th>
        <th>remitente</th>
        <th>asunto</th>
        <th>cite</th>
        <th>id destinatario</th>
       
    </tr>
@foreach ($correspondencia as $corres)
<tr>
    <td>{{$corres->id}}</td>
    <td>{{$corres->fecha}}</td>
    <td>{{$corres->remitente}}</td>
    <td>{{$corres->asunto}}</td>
    <td>{{$corres->cite}}</td>
    <td>{{$corres->destinatario_id}}</td>

    <td><a href="{{route('correspondencia.edit',$corres->id)}}">Editar</a></td>
    <td>
        <form action="{{route('correspondencia.destroy',$corres->id)}}" method="post">
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