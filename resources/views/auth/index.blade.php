@extends('layouts.app')
@section('titulo')
    Iniciar Sesión en Sidet
@endsection
@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center ">
    <div class="md:w-6/12 p-5">
       <img src="{{asset('img/registro.jpg')}}" alt="imagen login de usuarios" class="">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow">
        <form action="{{route('login')}}" method="POST">
            @csrf
            @if (session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
            @endif
            <div>
                <label id="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email
                </label>
                <input type="text" name="email" id="email" placeholder="Tu Correo" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label id="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Password
                </label>
                <input type="password" name="password" id="password" placeholder="Tu contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" value="{{old('password')}}">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <input type="checkbox" name="remember"> 
                <label for="" class="text-gray-500 text-sm">Mantener mi sesión abierta</label>
            </div>
            <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection