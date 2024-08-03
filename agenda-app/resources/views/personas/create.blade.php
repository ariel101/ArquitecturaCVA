<x-app-layout>

    <form action="{{route('persona.store')}}" method="POST">
        @csrf
        <div>
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres">
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion">
        </div>
        <div>
            <label for="correo_electronico">Correo Electrónico</label>
            <input type="email" name="correo_electronico">
        </div>
        <div>
            <label for="">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento">
        </div>
        <input type="submit" value="Registrar">
    </form>
</x-app-layout>
    