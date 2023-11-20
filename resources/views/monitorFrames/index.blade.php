@extends('layouts.app')
@section('titulo')
    Parametros / Monitor / Frencuencias
@endsection
@section('enlaces')
    <a href="{{route('parametros.index')}}" class="font-bold text-gray-600">Parametros /</a>  Monitor / Frencuencias
@endsection
@section('contenido')
<div class="px-5">
    <div class="flex justify-end mb-5">
        <a href="{{route('monitorFrames.create')}}" class="px-4 py-2 bg-green-500 rounded-lg text-white shadow hover:bg-green-600 hover:shadow-lg">
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
                <th class="border border-slate-300 p-2">Cantidad</th>
                <th class="border border-slate-300 p-2">Unidad</th>
                <th class="border border-slate-300 p-2">Descripción</th>
                <th class="border border-slate-300 p-2">estatus</th>
                <th class="border border-slate-300 p-2">Acción</th>
              </tr>
            </thead>
            <tbody>
                @if (count($monitorFrames) != 0)
                    @foreach ($monitorFrames as $monitorFrame)
                        <tr class="text-gray-500 text-sm">
                            <td class="border border-slate-300 p-2 ">{{$loop->iteration}}</td>
                            <td class="border border-slate-300 p-2">{{$monitorFrame->cantidad}}</td>
                            <td class="border border-slate-300 p-2">{{$monitorFrame->unidad}}</td>
                            <td class="border border-slate-300 p-2">{{$monitorFrame->description}}</td>
                            <td class="border border-slate-300 p-2">{{$monitorFrame->statu->name}}</td>
                            <td class="border border-slate-300 flex p-2">
                                <a href="{{route('monitorFrames.show',$monitorFrame->id)}}" class="bg-blue-500 px-3 py-2 rounded text-white mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg> 
                                </a>                         
                                <form action="{{route('monitorFrames.delete')}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{$monitorFrame->id}}" name="monitorFrame_id">
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
                        <td colspan="4" class="border border-slate-300 p-2 text-center text-xl"> No existen resultados</td>                    
                    </tr>  
                @endif      
              
            </tbody>
          </table>
    </div>
       
    
    


</div>
@endsection