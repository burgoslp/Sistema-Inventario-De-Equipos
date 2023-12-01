@extends('layouts.app')
@section('titulo')
   Componentes / Laptops / Crear 
@endsection
@section('enlaces')
    <a href="{{route('componentes.index')}}" class="font-bold text-gray-600">Componentes /</a>  <a href="{{route('laptops.index')}}" class="font-bold text-gray-600">Laptops</a> / Crear
@endsection
@section('contenido')
    <div class="px-5 ">
        <form action="{{route('laptops.update')}}" method="POST" enctype="multipart/form-data">         
            @method('PUT')             
            @csrf   
            <input type="hidden" name="laptop_id" value="{{$laptop->id}}"> 
            <div class="grid  bg-white shadow-lg p-5">

                <div class="flex justify-center">
                    <img src="{{asset('img/laptops/'.$laptop->image)}}" alt="imagen del monitor real" class="rounded-full w-1/4">
                </div>
                <div class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Serial:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('serial') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="serial" name="serial" type="text" placeholder="Ingrese serial" value="{{$laptop->serial}}">
                    @error('serial')
                        <p class="text-red-500 text-xs italic">Debe ingresar un serial valido</p>
                    @enderror
                </div> 

                
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Observación:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('observation') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="observation" name="observation" type="text" placeholder="Ingrese observación" value="{{$laptop->observation}}">
                    @error('observation')
                        <p class="text-red-500 text-xs italic">Debe ingresar una Observación</p>
                    @enderror
                </div> 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                       Nombre del procesador:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('processor') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="processor" name="processor" type="text" placeholder="Ingrese nombre procesador" value="{{$laptop->processor}}">
                    @error('processor')
                        <p class="text-red-500 text-xs italic">Debe ingresar un nombre de procesador</p>
                    @enderror
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Nombre de la gráfica:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('graphiccards') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="graphiccards" name="graphiccards" type="text" placeholder="Ingrese nombre gráfica" value="{{$laptop->graphiccards}}">
                    @error('graphiccards')
                        <p class="text-red-500 text-xs italic">Debe ingresar un nombre de tarjeta grafica</p>
                    @enderror
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Marca:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="brand_id" name="brand_id">
                            @foreach ($marcas as $marca)
                                @if ($marca->id == $laptop->brand_id)
                                    <option value="{{$marca->id}}" selected>{{$marca->name}}</option>
                                @else
                                    <option value="{{$marca->id}}">{{$marca->name}}</option>
                                @endif
                               
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Estado:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="statu_id" name="statu_id">
                            @foreach ($estatus as $statu)
                                <option value="{{$statu->id}}">{{$statu->name}}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Imagen:
                    </label>
                    <div class="relative">
                        <input type="file" name="file">
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