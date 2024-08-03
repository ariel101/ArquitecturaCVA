<x-app-layout>
    <form action="{{route('persona.update',$persona->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" value={{$persona->nombres}} >
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value={{$persona->apellidos}}>
        </div>
        <div>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" value={{$persona->direccion}} >
        </div>
        <div>
            <label for="correo_electronico">Correo Electrónico</label>
            <input type="email" name="correo_electronico" value={{$persona->correo_electronico}} >
        </div>
        <div>
            <label for="">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento" value={{$persona->fecha_nacimiento}} >
        </div>
        <input type="submit" value="Actualizar">
    </form>
</x-app-layout>