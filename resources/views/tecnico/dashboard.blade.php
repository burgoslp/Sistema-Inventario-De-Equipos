@extends('layouts.app')
@section('titulo')
    Dashboard
@endsection
@section('contenido')
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4 px-5 mb-5">
        <div class=" bg-red-500 text-center p-5 rounded-sm">
            <p class="text-white font-bold uppercase flex justify-center items-center mb-1">                                
                Computadoras
            </p>
            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-13 h-13">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                  </svg>
                  
               <span class="text-6xl text-white font-bold">{{count($ordenadores)}}</span>
            </p>
        </div>
        <div class=" bg-yellow-500 text-center p-5 rounded-sm">
            <p class="text-white font-bold uppercase flex justify-center items-center mb-1">                                
                Monitores
            </p>
            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="white" class="w-13 h-13">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg> 
               <span class="text-6xl text-white font-bold">{{count($monitores)}}</span>
            </p>
        </div>
        <div class=" bg-green-500 text-center p-5 rounded-sm">
            <p class="text-white font-bold uppercase flex justify-center items-center mb-1">                                
                Teclados
            </p>
            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-13 h-13">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                </svg>                  
               <span class="text-6xl text-white font-bold">{{count($teclados)}}</span>
            </p>
        </div>
        <div class=" bg-blue-500 text-center p-5 rounded-sm">
            <p class="text-white font-bold uppercase flex justify-center items-center mb-1">                                
                Ratones
            </p>
            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-13 h-13">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                  </svg>
                  
               <span class="text-6xl text-white font-bold">{{count($ratones)}}</span>
            </p>
        </div>
    </div>

    <div class="px-5 mb-5 grid md:grid-cols-1 xl:grid-cols-2 gap-4">
        
        <div class="hidden sm:block grid md:grid-rows-2  gap-4">
            <div class="bg-red-500 text-center p-5 rounded-sm mb-5">
                <div>
                    <p class="text-2xl text-white font-bold uppercase">Componentes de Portatiles</p>
                </div>
                <div class="flex justify-center pt-5 gap-4">
                    <div class="w-1/4">
                        <p class="text-sm text-gray-600 font-bold bg-white px-2 uppercase mb-1">Memoria</p>
                        <p class="text-sm text-gray-600 font-bold bg-white p-2">{{count($ramLaptops)}}</p>
                    </div>
                    
                    <div class="w-1/4">
                        <p  class="text-sm text-gray-600 font-bold bg-white px-2 uppercase mb-1">Storage</p>
                        <p class="text-sm text-gray-600 font-bold bg-white p-2">{{count($diskLaptops)}}</p>
                    </div>
                </div>
            </div>
            <div class="bg-yellow-500 text-center p-5 rounded-sm">
                <div>
                    <p class="text-white font-bold uppercase">Componentes de Ordenadores</p>
                </div>
                <div class="flex justify-between pt-5 gap-4">
                    <div class="w-1/4">
                        <p class="text-sm text-gray-600 font-bold bg-white px-2 uppercase mb-1">Memoria</p>
                        <p class="text-sm text-gray-600 font-bold bg-white p-2">{{count($ramOrdenador)}}</p>
                    </div>
                    <div class="w-1/4">
                        <p  class="text-sm text-gray-600 font-bold bg-white px-3 uppercase mb-1">procesador</p>
                        <p class="text-sm text-gray-600 font-bold bg-white p-2">{{count($procesadorOrdenador)}}</p>
                    </div>
                 
                    <div class="w-1/4">
                        <p  class="text-sm text-gray-600 font-bold bg-white px-2 uppercase mb-1">Storage</p>
                        <p class="text-sm text-gray-600 font-bold bg-white p-2">{{count($diskOrdenador)}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-lg bg-white p-5 mb-2">
            <div class="text-center pb-5">
                <p class="font-bold text-xl uppercase text-gray-500">Usuarios</p>
            </div>
            <ul> 
                <hr> 
                @foreach ($usuarios as $usuario)
                    <li class="flex items-center gap-2 mb-3">
                        <div class="w-1/5">
                            <img src="{{asset('img/usuario.png')}}" alt="imagen de perfil del usuario" class="rounded">
                        </div>
                        <div class="w-1/2">
                            <a href="" class="font-bold">{{$usuario->name}}</a>
                            <p class="text-xs text-gray-500">{{$usuario->hasRole()}}</p>
                            <p class="text-xs text-gray-500">{{$usuario->email}}</p>
                        </div>
                    </li>  
                    <hr>
                @endforeach     
            </ul> 
            
            <div class="text-center pt-5">                
                <a href="" class="font-bold text-xl uppercase text-gray-500 hover:text-gray-700">Ver más</a>
            </div>
        </div>
    </div>
@endsection