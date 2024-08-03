<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white shadow-lg rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Top Channels</h2>
        </header>
        <div class="p-3">

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                        <tr>
                            <th class="p-2">
                                <div class="font-semibold text-left">Nombres</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Apellidos</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Direccion</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Correo Electroncio</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Fecha Nacimiento</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Profesion</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Operaciones</div>
                            </th>

                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-slate-100">
                        @foreach ($personas as $persona)
                        <tr>
                            <td class="p-2">
                                <div class="flex items-center">
                                    <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
                                        <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
                                        <path
                                            d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"
                                            fill="#FFF"></path>
                                    </svg>
                                    <div class="text-slate-800">{{$persona->nombres}}</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{$persona->apellidos}}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center text-emerald-500">{{$persona->direccion}}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{$persona->correo_electronico}}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center text-sky-500">{{$persona->fecha_nacimiento}}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center text-sky-500">{{$persona->profesion->nombre}}</div>
                            </td>
                            <td>
                                <a href="{{route('persona.edit',$persona->id)}}">Editar</a>
                                <form action="{{route('persona.destroy',$persona->id)}}" method="post">
                                    @csrf

                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>



        <a type="button" class="w-1/6 items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-300 transform border rounded-lg focus:border-teal-500 focus:ring focus:ring-primary focus:ring-opacity-40 dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg> <span class="hidden md:inline">
            Insertar
        </span></a>
        <a href="{{route('persona.create')}}">Insertar</a>
    </div>

</x-app-layout>