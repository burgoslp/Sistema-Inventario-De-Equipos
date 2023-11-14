@extends('layouts.app')
@section('titulo')
    Parametros
@endsection
@section('enlaces')
    Parametros
@endsection
@section('contenido')
    <div class="grid  px-5 mb-7">
      <h1 class="uppercase font-bold text-2xl p-5 bg-white shadow-lg text-gray-600">
        generales
      </h1>
    </div>
    <div class="grid md:grid-cols-2 gap-4  px-5 mb-7">
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Marcas</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('brands.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Conectores</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('conectores.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-4  px-5 mb-16">
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Conexiones</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('conexiones.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>              
    </div>




    <div class="grid  px-5 mb-7">
        <h1 class="uppercase font-bold text-2xl p-5 bg-white shadow-lg text-gray-600">
          Monitores
        </h1>
    </div>
    <div class="grid md:grid-cols-2 gap-4  px-5 mb-16">
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Resoluciones de monitores</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('monitorResolutions.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Frecuencia de monitores</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('monitorFrames.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>        
    </div>
    <div class="grid md:grid-cols-2 gap-4  px-5 mb-16">
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400"> Tamaño de monitores</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('monitorSizes.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>              
    </div>
     



    <div class="grid  px-5 mb-7">
        <h1 class="uppercase font-bold text-2xl p-5 bg-white shadow-lg text-gray-600">
          Teclados
        </h1>
    </div>
    <div class="grid md:grid-cols-2 gap-4  px-5 mb-7">
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Tipos de teclados</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('keyboardModels.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Tamaños de teclados</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('keyboardSizes.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
            
        </div>        
    </div>
@endsection