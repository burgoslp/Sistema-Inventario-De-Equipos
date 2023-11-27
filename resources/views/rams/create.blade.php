@extends('layouts.app')
@section('titulo')
   Componentes / Rams / Crear 
@endsection
@section('enlaces')
    <a href="{{route('componentes.index')}}" class="font-bold text-gray-600">Componentes /</a>  <a href="{{route('rams.index')}}" class="font-bold text-gray-600">rams</a> / Crear
@endsection
@section('contenido')
    <div class="px-5 ">
        <form action="{{route('rams.store')}}" method="POST" >         
            @csrf   
            <div class="grid  bg-white shadow-lg p-5">
                <div class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Serial:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('serial') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="serial" name="serial" type="text" placeholder="Ingrese el serial de la memoria">
                    @error('serial')
                        <p class="text-red-500 text-xs italic">Debe ingresar un serial valido</p>
                    @enderror
                </div> 
                <div class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Capacidad:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('capacidad') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="capacidad" name="capacidad" type="text" placeholder="Ingrese la capacidad de la memoria">
                    @error('capacidad')
                        <p class="text-red-500 text-xs italic">Debe ingresar una capacidad</p>
                    @enderror
                </div> 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Unidad:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('unidad') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="unidad" name="unidad" type="text" placeholder="Ingrese una unidad (Gb, Mb)">
                    @error('unidad')
                        <p class="text-red-500 text-xs italic">Debe ingresar una unidad</p>
                    @enderror
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Frecuencia:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('frecuencia') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="frecuencia" name="frecuencia" type="text" placeholder="1200Hz">
                    @error('frecuencia')
                        <p class="text-red-500 text-xs italic">Debe ingresar una frecuencia</p>
                    @enderror
                </div> 
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Modelo:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="modelo" name="modelo">
                            <option value="ddr4">Ddr4</option>
                            <option value="ddr3">Ddr3</option>
                            <option value="ddr">Ddr</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Marca:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="brand_id" name="brand_id">
                            @foreach ($marcas as $marca)
                                <option value="{{$marca->id}}">{{$marca->name}}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Tipo memoria:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="tipo_memoria" name="tipo_memoria">
                           <option value="1">Ordenador</option>
                           <option value="0">Laptop</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Asignar:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="machine_id" name="machine_id">
                           <option value="0">Sin asignar</option>
                           @foreach ($ordenadores as $ordenador)
                                    <option value="1|{{$ordenador->id}}">Ordernador {{$ordenador->serial}}</option>                                    

                           @endforeach
                           <option value="0|1">Laptop 1ksh12j3gs</option>
                           
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