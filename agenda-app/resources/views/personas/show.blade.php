<x-app-layout>
    <li>
        Nombres:
        {{$persona->nombres}}
    </li>
    <li>
        Apellidos:
        {{$persona->apellidos}}
    </li>
    <li>
        Direccion:
        {{$persona->direccion}}
    </li>
    <li>
        Correo Electrónico:
        {{$persona->correo_electronico}}
    </li>
    <li>
        Fecha Nacimiento:
        {{$persona->fecha_nacimiento}}
    </li>

<a href="{{route('persona.index')}}">Listar</a>
</x-app-layout>