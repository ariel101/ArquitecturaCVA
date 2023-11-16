<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listado de clientes</h1>
<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        
    </tr>
@foreach ($productos as $producto)
<tr>
    <td>{{$producto->nombre}}</td>
    <td>{{$producto->precio}}</td>
  
    <td><a href="{{route('productos.edit',$producto->id)}}">Editar</a></td>
    <td>
        <form action="{{route('productos.destroy',$producto->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
</table>    
<a href="{{route('productos.create')}}">Registrar productos</a>
</body>
</html>