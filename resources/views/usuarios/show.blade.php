@extends('layouts.app')
@section('titulo')
    Usuarios / Actualizar
@endsection
@section('enlaces')
    <a href="{{route('usuarios.index')}}" class="font-bold text-gray-600">Usuarios /</a> Actualizar 
@endsection
@section('contenido')
    <div class="px-5 ">
        <form action="{{route('usuarios.update')}}" method="POST">      
            @method('PUT')
            @csrf    
            <input id="name" name="User_id" type="hidden" placeholder="Ingrese Conector" value="{{$User->id}}">

            <div class="grid  bg-white shadow-lg p-5">
                <div class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text" placeholder="Ingrese marca" value="{{$User->name}}">
                   @error('name')
                    <p class="text-red-500 text-xs italic">Debe ingresar un nombre para la marca</p>
                   @enderror
                </div> 
                
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        username:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('username') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="username" name="username" type="text" placeholder="Ingrese nombre de usuario" value="{{$User->username}}">
                    @error('username')
                        <p class="text-red-500 text-xs italic">Debe ingresar un nombre de usuario valido</p>
                    @enderror
                </div> 

                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Email:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('email') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="email" name="email" type="text" placeholder="Ingrese un correo" value="{{$User->email}}">
                    @error('email')
                        <p class="text-red-500 text-xs italic">Debe ingresar un correo valido</p>
                    @enderror
                </div>
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Contraseña:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('password') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="password" name="password" type="password" placeholder="Ingrese una nueva contraseña">
                    @error('password')
                        <p class="text-red-500 text-xs italic">Debe ingresar un formato de contraseña valido</p>
                    @enderror
                </div> 
                
                <div  class="mb-5">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Estado:
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="statu_id" name="statu_id">
                         @foreach ($status as $statu)
                            @if ($statu->id == $User->statu_id)
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