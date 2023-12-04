@extends('layouts.app')
@section('titulo')
   Componentes / Estaciones de trabajo / Crear 
@endsection
@section('enlaces')
    <a href="{{route('equipments.index')}}" class="font-bold text-gray-600">Estaciones de trabajo /</a> Crear
@endsection
@section('contenido')
    <div class="px-5 ">
        <form action="{{route('equipments.store')}}" method="POST">         
            @csrf   
            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
            <div class="grid  bg-white shadow-lg p-5">
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Maquina:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="machine_id" name="machine_id">
                            <option value="-1">Seleccione una Maquina {{$equipment->notebook}}</option>
                                @foreach ($ordenadores as $ordenador)
                                    @if (!is_null($equipment->computer_id))
                                        @if ($ordenador->id == $equipment->computer_id)
                                            <option value="1|{{$ordenador->id}}" selected>Ordernador {{$ordenador->serial}}</option>                                    
                                        @endif
                                    @else                                                
                                        <option value="1|{{$ordenador->id}}" >Ordernador {{$ordenador->serial}}</option>                                    
                                    @endif 
                            @endforeach
                            @foreach ($laptops as $laptop)
                                    @if (!is_null($equipment->notebook_id))
                                        @if ($laptop->id == $equipment->notebook_id)
                                            <option value="0|{{$laptop->id}}" selected>Laptop {{$laptop->serial}}</option>                                
                                            
                                        @else
                                            <option value="0|{{$laptop->id}}">Laptop {{$laptop->serial}}</option>                                        
                                        @endif

                                    @else
                                        <option value="0|{{$laptop->id}}">Laptop {{$laptop->serial}}</option>  
                                    @endif                                                  
                            @endforeach                            
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        @error('maquina_id')
                            <p class="text-red-500 text-xs italic ">Debes Seleccionar un ordenador o laptop</p>
                        @enderror
                    </div>
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Monitor:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="monitor_id" name="monitor_id">
                            <option value="-1">Seleccione una monitor</option>
                            @foreach ($monitores as $monitor)
                                @if ($monitor->id == $equipment->monitor_id )
                                    <option value="{{$monitor->id}}" selected>{{$monitor->size->cantidad}} {{$monitor->size->unidad}} | {{$monitor->serial}}</option>
                                @else
                                    <option value="{{$monitor->id}}">{{$monitor->size->cantidad}} {{$monitor->size->unidad}} | {{$monitor->serial}}</option>
                                @endif  
                            @endforeach
                            
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        @error('monitor_id')
                            <p class="text-red-500 text-xs italic ">Debes Seleccionar un monitor</p>
                        @enderror
                    </div>
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Teclados:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="keyboard_id" name="keyboard_id">
                            <option value="-1">Seleccione un teclado</option>
                            @foreach ($teclados as $teclado)
                                @if ($teclado->id === $equipment->keyboard_id)
                                    <option value="{{$teclado->id}}" selected>{{$teclado->size->name}} | {{$teclado->model->name}} | {{$teclado->serial}}</option>
                                @else
                                    <option value="{{$teclado->id}}">{{$teclado->size->name}} | {{$teclado->model->name}} | {{$teclado->serial}}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('keyboard_id')
                            <p class="text-red-500 text-xs italic ">Debes Seleccionar un teclado</p>
                    @enderror
                </div>

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Ratones:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="mouse_id" name="mouse_id">
                            <option value="-1">Seleccione un raton</option>
                            @foreach ($ratones as $raton)
                                <option value="{{$raton->id}}">Raton | {{$raton->serial}}</option>
                            @endforeach

                            @foreach ($ratones as $raton)
                                @if ($raton->id === $equipment->keyboard_id)
                                    <option value="{{$raton->id}}" selected>Raton | {{$raton->serial}}</option>
                                @else
                                    <option value="{{$raton->id}}">Raton | {{$raton->serial}}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('mouse_id')
                            <p class="text-red-500 text-xs italic ">Debes Seleccionar un raton</p>
                    @enderror
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
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold " for="grid-state">
                        COD Oficina:
                    </label>
                    <div class="relative">
                        <input type="text"  class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('cod_oficina') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="cod_oficina" placeholder="Ingrese el codigo de oficina">
                    </div>
                    @error('cod_oficina')
                        <p class="text-red-500 text-xs italic ">Debe ingresar un codigo de oficina</p>
                    @enderror
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