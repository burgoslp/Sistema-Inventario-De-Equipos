<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class componentesController extends Controller
{
    public function index(){
        return view('componentes.index');
    }



    
    public function prueba(){

        $url = 'https://google.com'; // Reemplaza con la URL deseada
        $archivo = public_path('qrcodes/ejemplo.png'); // Ruta donde se guardará el código QR

        QrCode::format('png')->size(300)->generate($url, $archivo);

        
    }
}
