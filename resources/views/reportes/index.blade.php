@extends('layouts.app')
@section('titulo')
    Reportes / 
@endsection
@section('enlaces')
    Reportes /
@endsection
@section('contenido')
<div class="px-5">
    <div class="  mb-5 shadow bg-white p-3">
        <form action="{{route('reportes.show')}}" method="POST" class="flex flex-row items-center justify-between">
            @csrf
            <div class="flex flex-row items-center">
                <div class="mr-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Serial:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('serial') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="serial" name="serial" type="text" placeholder="Ingrese un serial">
                    @error('serial')
                        <p class="text-red-500 text-xs italic">Debe ingresar un serial valido</p>
                    @enderror
                </div>

                <div  class="mr-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Equipo:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="equipo" name="equipo">
                            <option value="-1">Seleccione un equipo</option>
                            <option value="monitors">Monitor</option>
                            <option value="keyboards">Teclado</option>
                            <option value="mice">Mouse</option>
                            <option value="computers">Ordenador</option>
                            <option value="notebooks">Laptop</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('equipo')
                    <p class="text-red-500 text-xs italic ">Debes Seleccionar un equipo</p>
                    @enderror
                </div> 

                <div class="mr-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Desde:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('desde') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="desde" name="desde" type="date" >
                    @error('desde')
                        <p class="text-red-500 text-xs italic">Debe ingresar un serial valido</p>
                    @enderror
                </div>

                <div class="mr-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Hasta:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('hasta') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="hasta" name="hasta" type="date" >
                    @error('hasta')
                        <p class="text-red-500 text-xs italic">Debe ingresar un serial valido</p>
                    @enderror
                </div>
            </div>

            <div class="md:text-right">
                     <input type="submit" value="Buscar" class="w-full md:w-auto px-5 uppercase py-2 bg-green-600 rounded text-white hover:bg-green-700 cursor-pointer">
            </div>
        </form> 
    </div>
    <div class="bg-white shadow-lg">
        <table class="table-auto text-left border-collapse border border-slate-400 w-full">
            <thead class="bg-gray-400 text-white">
              <tr>
                <th class="border border-slate-300 p-2">#</th>
                <th class="border border-slate-300 p-2">Equipo</th>
                <th class="border border-slate-300 p-2">Serial</th>
                <th class="border border-slate-300 p-2">Descripción</th>
                <th class="border border-slate-300 p-2">Estatus</th>
                <th class="border border-slate-300 p-2">Acción</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($monitores as $monitor)
                <tr>
                    <td class="border border-slate-300 p-2 ">{{$loop->iteration}}</td>
                    <td class="border border-slate-300 p-2 ">monitor</td>
                    <td class="border border-slate-300 p-2">{{$monitor->serial}}</td>
                    <td class="border border-slate-300 p-2">
                        Observación: {{$monitor->observation}} <br>
                    </td>
                    <td class="border border-slate-300 p-2">
                        @if (isset($monitor->equipment->id))
                            Asignado 
                        @else
                            Sin asignar
                        @endif
                    </td>
                    <td class="border border-slate-300 flex p-2">                   
                                                
                    </td>
                </tr>
                @endforeach
                @foreach ($teclados as $teclado)
                <tr>
                    <td class="border border-slate-300 p-2 ">{{$loop->iteration}}</td>
                    <td class="border border-slate-300 p-2 ">teclado</td>
                    <td class="border border-slate-300 p-2">{{$teclado->serial}}</td>
                    <td class="border border-slate-300 p-2">
                        Observación: {{$teclado->observation}} <br>
                    </td>
                    <td class="border border-slate-300 p-2">
                        @if (isset($teclado->equipment->id))
                            Asignado 
                        @else
                            Sin asignar
                        @endif
                    </td>
                    <td class="border border-slate-300 flex p-2">                   
                                                
                    </td>
                </tr>
                @endforeach
                @foreach ($ratones as $raton)
                <tr>
                    <td class="border border-slate-300 p-2 ">{{$loop->iteration}}</td>
                    <td class="border border-slate-300 p-2 ">raton</td>
                    <td class="border border-slate-300 p-2">{{$raton->serial}}</td>
                    <td class="border border-slate-300 p-2">
                        Observación: {{$raton->observation}} <br>
                    </td>
                    <td class="border border-slate-300 p-2">
                        @if (isset($raton->equipment->id))
                            Asignado 
                        @else
                            Sin asignar
                        @endif
                    </td>
                    <td class="border border-slate-300 flex p-2">                   
                                                
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <div class="p-5">


    </div> 
</div>
@endsection