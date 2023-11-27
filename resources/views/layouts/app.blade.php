<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIDET - @yield('titulo')</title>
    <style>
        nav::-webkit-scrollbar {
            -webkit-appearance: none;
        }

        nav::-webkit-scrollbar:vertical {
            width:10px;
        }

        nav::-webkit-scrollbar-button:increment,nav::-webkit-scrollbar-button {
            display: none;
        } 

        nav::-webkit-scrollbar:horizontal {
            height: 10px;
        }

        nav::-webkit-scrollbar-thumb {
            background-color: #797979;
            border-radius: 20px;
           
        }

        nav::-webkit-scrollbar-track {
            border-radius: 10px;  
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">
  @auth
    <nav id="menuHorizontal" class="hidden sm:block fixed sm:w-3/6 md:w-2/5 lg:w-80 h-screen  bg-zinc-800 overflow-auto " >
      <div class="p-3 pt-6">
        <div class="w-2/4 mx-auto mb-4">
          <img src="{{asset('img/pruebaperfil.jpg')}}" alt="foto de usuario por defecto" class="rounded-full border-4 border-gray-700">
        </div>
        <div class="w-9/12 mx-auto text-center">
          <div class="flex justify-center">
            <p class="font-bold uppercase text-white mx-2">
                Armando Rodriguez
            </p>
            <span class="text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>                         
            </span>
          </div>
          <p class="text-xs text-gray-500 uppercase">Administrador</p>
        </div>
      </div>

      <ul class="mb-5 text-gray-400"> 
        <li class="flex justify-between p-3 items-center {{Route::is('administrador.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">
          <a href="{{route('login')}}" class="font-bold uppercase">Dashboard</a>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
          </svg>
        </li>
        @if(auth()->user()->validaRolAdministrador())
          <li class="flex justify-between p-3 items-center {{Route::is('parametros.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">
            <a href="{{route('parametros.index')}}" class="font-bold uppercase">Parametros</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>    
          </li>
        @endif
        
        @if(auth()->user()->validaRolAdministrador())
          <li class="flex justify-between p-3 items-center {{Route::is('usuarios.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">    
            <a href="{{route('usuarios.index')}}" class=" font-bold uppercase">Usuarios</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg> 
          </li> 
        @endif
        <li class="flex justify-between p-3 items-center {{Route::is('workstations.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">        
          <a href="{{route('workstations.index')}}" class=" font-bold uppercase">Workstations</a>

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
          </svg>        
        </li>

        <li class="flex justify-between p-3 items-center {{Route::is('componentes.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">
          <a href="{{route('componentes.index')}}" class=" font-bold uppercase">Componentes</a>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
          </svg>
        </li>

        <li class="flex justify-between p-3 items-center {{Route::is('reportes.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">
          <a href="{{route('reportes.index')}}" class=" font-bold uppercase">Reportes</a>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
          </svg>
        </li>
        @if(auth()->user()->validaRolAdministrador())
        <li class="flex justify-between p-3 items-center {{Route::is('estadisticas.index') ?'text-gray-50 bg-zinc-900 border-l-4 border-green-300':'border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer'}}">
          <a href="{{route('estadisticas.index')}}" class=" font-bold uppercase">Estadisticas</a>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
          </svg>
        </li>
        
       
      </ul>
      @endif
      <hr>
      <ul class="text-gray-400 mt-5 mb-10">
        <li class="flex justify-between p-3 items-center border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer">
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="font-bold uppercase">Cerrar Sesión</button>
          </form>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
          </svg> 
        </li>      

        <li onclick="toggleMenu()" class="flex justify-between p-3 items-center border-l-4 border-zinc-800	 hover:border-l-4 hover:border-green-300 hover:text-white cursor-pointer">
          <span class="font-bold uppercase"> Cerrar Panel</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>         
        </li>
      </ul>
    </nav>
    <div id="divEspaciado" class="espaciado hidden sm:block sm:w-3/6 md:w-2/5 lg:w-80 ml-3">
    </div>
  @endauth
  
  
  
  <main id="mainContenedor" class="{{ !auth()->user() ? "w-full":"w-full sm:w-3/6 md:w-3/5 lg:w-4/5"}}  ">
        <header class="mx-auto p-4 flex justify-between items-center  bg-white shadow-md ">
          <div class="flex  jutify-center items-center">
              @auth
                <svg onclick="toggleMenu()" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mr-3 cursor-pointer">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
              @endauth
            <h1 class="text-3xl font-black"><a href="{{route('login')}}">SIDET</a></h1> 
          </div>
          @auth
            <div class="flex w-80 justify-end items-center">
              <!--
              <div class="w-10">
                <img src="{{asset('img/usuario.png')}}" alt="foto de usuario por defecto">
              </div>
              
              <div class="flex justify-center items-center pl-2 w-auto">
                <p class="text-sm text-gray-500 font-bold mr-2">Leopoldo Pinedo</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>   
              </div>-->
              
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar Sesión</button>
              </form>
            </div>                
          @endauth             
        </header>

        <section class="pt-10 ">
            @auth
              <div class="mb-5 px-5">
                <a href="{{route('login')}}" class="font-bold text-gray-600 "> {{auth()->user()->hasRole()}} {{Route::is('administrador.index') || Route::is('tecnico.index')  ? "":"/";}}</a> 
                <span class="text-sm  text-gray-500"> @yield('enlaces')</span>
              </div> 
            @endauth
            @guest
              <div>      
                <h2 class="font-black text-center text-3xl mb-10">
                  @yield('enlaces')
                </h2>              
              </div> 
            @endguest           
            @yield('contenido')
        </section>
  </main>
    


    <!--<footer class="mt-10 text-center p-5 text-gray-500 font-bold">
      SIDET - todos los derechos reservados
    </footer>-->
<script>

  function toggleMenu() {
    let menu = document.querySelector('#menuHorizontal'),
        espaciado=document.querySelector('#divEspaciado'),
        contenedor=document.querySelector('#mainContenedor');
    if(window.innerWidth > 638 ){
        
        menu.classList.toggle('sm:hidden');
        espaciado.classList.toggle('sm:hidden');
        if(contenedor.classList.length  == 1){

          contenedor.classList="";
          contenedor.classList="w-full sm:w-3/6 md:w-3/5 lg:w-4/5";
        }else{
          contenedor.classList="";
          contenedor.classList.toggle('w-full');
        }     
    }else{
     
      if(menu.classList.length == 1){
        menu.classList="w-full fixed h-screen bg-zinc-800 overflow-auto";

      }else{
        menu.classList="hidden";
      }

    }   
  }
</script>
</body>
</html>