@extends('layouts.app')
@section('titulo')
    Componentes
@endsection
@section('enlaces')
    Componentes
@endsection
@section('contenido')
<div class="grid  px-5 mb-7">
    <h1 class="uppercase font-bold text-2xl p-5 bg-white shadow-lg text-gray-600">
      Componentes generales
    </h1>
  </div>
  <div class="grid md:grid-cols-2 gap-4  px-5 mb-7">
      <div class="bg-white shadow-lg p-5">
          <div class="uppercase font-bold text-gray-400">monitor</div>
          <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
          <a href="{{route('brands.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
      </div>
      <div class="bg-white shadow-lg p-5">
          <div class="uppercase font-bold text-gray-400">Teclado</div>
          <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
          <a href="{{route('conectores.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
      </div>
  </div>
  <div class="grid md:grid-cols-2 gap-4  px-5 mb-16">
      <div class="bg-white shadow-lg p-5">
          <div class="uppercase font-bold text-gray-400">Mouses</div>
          <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
          <a href="{{route('conexiones.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
      </div>              
  </div>

  <div class="grid  px-5 mb-7">
    <h1 class="uppercase font-bold text-2xl p-5 bg-white shadow-lg text-gray-600">
      Componentes de ordenadores
    </h1>
  </div>
  <div class="grid md:grid-cols-2 gap-4  px-5 mb-7">
      <div class="bg-white shadow-lg p-5">
          <div class="uppercase font-bold text-gray-400">Memoria ram</div>
          <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
          <a href="{{route('brands.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
      </div>
      <div class="bg-white shadow-lg p-5">
          <div class="uppercase font-bold text-gray-400">Discos de almacenamiento</div>
          <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
          <a href="{{route('conectores.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
      </div>
  </div>
  <div class="grid md:grid-cols-2 gap-4  px-5 mb-16">
      <div class="bg-white shadow-lg p-5">
          <div class="uppercase font-bold text-gray-400">Procesadores</div>
          <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
          <a href="{{route('conexiones.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
      </div> 
        <div class="bg-white shadow-lg p-5">
            <div class="uppercase font-bold text-gray-400">Procesadores</div>
            <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
            <a href="{{route('conexiones.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
        </div>              
  </div>

  <div class="grid md:grid-cols-2 gap-4  px-5 mb-16">
    <div class="bg-white shadow-lg p-5">
        <div class="uppercase font-bold text-gray-400">Tarjeta grafica</div>
        <p class="mb-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, beatae. In est officia natus delectus id necessitatibus exercitationem molestias a temporibus recusandae! Ipsa, dicta dolore amet molestias quam possimus nobis.</p>
        <a href="{{route('conexiones.index')}}"  class="bg-green-600 px-5 py-2 rounded text-white uppercase">Ver más </a>
    </div> 
  </div>             
</div>

  <div class="grid  px-5 mb-7">
    <h1 class="uppercase font-bold text-2xl p-5 bg-white shadow-lg text-gray-600">
      Componentes de laptos
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
@endsection