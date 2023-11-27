@extends('layouts.app')
@section('titulo')
    Componentes / Procesadores
@endsection
@section('enlaces')
    <a href="{{route('componentes.index')}}" class="font-bold text-gray-600">Componentes /</a>  Procesadores
@endsection
@section('contenido')
<div class="px-5">
    <div class="flex justify-end mb-5">
        <a href="{{route('processors.create')}}" class="px-4 py-2 bg-green-500 rounded-lg text-white shadow hover:bg-green-600 hover:shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </a>  
    </div>
    <div class="bg-white shadow-lg">
        <table class="table-auto text-left border-collapse border border-slate-400 w-full">
            <thead class="bg-gray-400 text-white">
              <tr>
                <th class="border border-slate-300 p-2">#</th>
                <th class="border border-slate-300 p-2">Serial</th>
                <th class="border border-slate-300 p-2">Descripción</th>
                <th class="border border-slate-300 p-2">Estatus</th>
                <th class="border border-slate-300 p-2">Acción</th>
              </tr>
            </thead>
            <tbody>
                @if (count($processors) != 0)    
                    @foreach ($processors as $processor)
                        <tr class="text-gray-500 text-sm">
                            <td class="border border-slate-300 p-2 ">{{$loop->iteration}}</td>
                            <td class="border border-slate-300 p-2">{{$processor->serial}}</td>
                            <td class="border border-slate-300 p-2">
                                Observación: {{$processor->observation}} <br>
                                Marca: {{$processor->brand->name}} <br>
                                Nombre: {{$processor->name}} <br>
                            </td>
                            <td class="border border-slate-300 p-2">{{$processor->computer_id ?? "Sin asignar"}}</td>
                            <td class="border border-slate-300 flex p-2">
                                                      
                                <form action="{{route('processors.delete')}}" method="POST" class="mr-3">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{$processor->id}}" name="processor_id">
                                    <button type="submit"  class="bg-red-500 px-3 py-2 rounded text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>     
                                    </button>
                                </form> 
                                
                                                          
                            </td>
                        </tr>
                    @endforeach                    
                @else
                    <tr class="text-gray-500 text-sm">
                        <td colspan="5" class="border border-slate-300 p-2 text-center text-xl"> No se han registrado Procesadores</td>                    
                    </tr>  
                @endif
            </tbody>
          </table>
    </div>
    <div class="p-5">
        {{$processors->links()}}
    </div> 
    
    


</div>
@endsection