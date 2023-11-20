@extends('layouts.app')
@section('titulo')
   Parametros / Teclados / Tamaños / Actualizar
@endsection
@section('enlaces')
    <a href="{{route('parametros.index')}}" class="font-bold text-gray-600">Parametros /</a>  <a href="{{route('keyboardSizes.index')}}" class="font-bold text-gray-600">Teclados / Tamaños</a> / Actualizar
@endsection
@section('contenido')
    <div class="px-5 ">
        <form action="{{route('keyboardSizes.update')}}" method="POST">      
            @method('PUT')
            @csrf    
            <input id="name" name="keyboardSize_id" type="hidden" placeholder="Ingrese conexion" value="{{$keyboardSize->id}}">

            <div class="grid  bg-white shadow-lg p-5">
                <div class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text" placeholder="Ingrese marca" value="{{$keyboardSize->name}}">
                   @error('name')
                    <p class="text-red-500 text-xs italic">Debe ingresar un nombre para la marca</p>
                   @enderror
                </div> 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Descripcion:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('description') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="description" name="description" type="text" placeholder="Ingrese descripción" value="{{$keyboardSize->description}}">
                    @error('description')
                        <p class="text-red-500 text-xs italic">Debe ingresar alguna descripción</p>                        
                    @enderror
                </div> 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Estado:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="statu_id" name="statu_id">
                         @foreach ($status as $statu)
                            @if ($statu->id == $keyboardSize->statu_id)
                                <option value="{{$statu->id}}" selected>{{$statu->name}}</option>
                                
                            @else
                                <option value="{{$statu->id}}" >{{$statu->name}}</option>                                
                             @endif
                         @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div> 
                @if (session('mensaje'))
                    <div class="text-center bg-green-500 p-2 rounded-lg mb-6 text-white font-bold uppercase">
                        {{session('mensaje')}}
                    </div>
                @endif
                <div class="md:text-right">
                     <input type="submit" value="Guardar" class="w-full md:w-auto px-3 py-2 bg-green-600 rounded text-white hover:bg-green-700 cursor-pointer">
                </div>
            </div>
        </form>
    </div>
@endsection