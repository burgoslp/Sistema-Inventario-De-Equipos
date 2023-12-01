@extends('layouts.app')
@section('titulo')
   Componentes / Ordenadores / Crear 
@endsection
@section('enlaces')
    <a href="{{route('componentes.index')}}" class="font-bold text-gray-600">Componentes /</a>  <a href="{{route('computers.index')}}" class="font-bold text-gray-600">Ordenadores</a> / Crear
@endsection
@section('contenido')
    <div class="px-5 ">
        <form action="{{route('computers.update')}}" method="POST" enctype="multipart/form-data">
            @method('PUT')             
            @csrf   
            <input type="hidden" name="computer_id" value="{{$computer->id}}">
            <div class="grid  bg-white shadow-lg p-5">

                <div class="flex justify-center">
                    <img src="{{asset('img/computers/'.$computer->image)}}" alt="imagen del monitor real" class="rounded-full w-1/4">
                </div>

                <div class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Serial:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('serial') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="serial" name="serial" type="text" placeholder="Ingrese serial" value="{{$computer->serial}}">
                    @error('serial')
                        <p class="text-red-500 text-xs italic">Debe ingresar un serial valido</p>
                    @enderror
                </div>                 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Observación:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('observation') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="observation" name="observation" type="text" placeholder="Ingrese observación" value="{{$computer->observation}}">
                    @error('observation')
                        <p class="text-red-500 text-xs italic">Debe ingresar una Observación</p>
                    @enderror
                </div> 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Marca:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="brand_id" name="brand_id">
                            @foreach ($marcas as $marca)
                                @if ($computer->brand_id == $marca->id)
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
                        Cantidad slots de ram:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cant_slot_ram" name="cant_slot_ram">
                           @for ($i = 1; $i <= 4; $i++)
                                @if ($i == $computer->cant_slot_ram)
                                    <option value="{{$i}}" selected>{{$i}}</option>
                                @else 
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif                               
                           @endfor
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Cantidad slots de procesadores:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cant_slot_processor" name="cant_slot_processor">
                            @for ($i = 1; $i <= 4; $i++)
                                @if ($i == $computer->cant_slot_processor)
                                    <option value="{{$i}}" selected>{{$i}}</option>
                                @else 
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif                               
                           @endfor
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