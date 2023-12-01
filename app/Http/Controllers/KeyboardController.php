<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\statu;
use App\Models\keyboard;
use App\Models\connector;
use App\Models\keyboardSize;
use Illuminate\Http\Request;
use App\Models\keyboardModel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class KeyboardController extends Controller
{
    public function index(){
        $teclados=keyboard::paginate(10);
        return view('teclados.index',compact('teclados'));
    }

    public function create(){
        $estatus=statu::all();
        $marcas=brand::all();
        $conectores=connector::all();
        $modelos=keyboardModel::all();
        $tamaños=keyboardSize::all();
        return view('teclados.create',compact('estatus','marcas','conectores','modelos','tamaños'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'serial'=>'required|max:30|unique:keyboards,serial',
            'observation'=>'required|max:100|min:10',
        ]);
            $data=$request->all();
            if ($imagen=$request->file('file')) {
                $ruta="img/teclados/";
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                $nombre_imagen=$imagen->getClientOriginalName();
                $imagen->move($ruta,$nombre_imagen);
                $data['image']=$nombre_imagen;
            }          
        
        $url = 'https://google.com'; // Reemplaza con la URL deseada
        $archivoName="qrimage_teclado_".$nombre_imagen;
        $ruta='qrcodes/teclados/';
        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        $archivo = public_path($ruta.$archivoName); // Ruta donde se guardará el código QR
        QrCode::format('png')->size(300)->generate($url, $archivo);
        $data['qrcode']=$archivoName;
        
        keyboard::create($data);        
        
        return back()->with('mensaje','Teclado Registrado');
    }

    public function show($id){
        $teclado=keyboard::find($id);
        $estatus=statu::all();
        $marcas=brand::all();
        $conectores=connector::all();
        $modelos=keyboardModel::all();
        $tamaños=keyboardSize::all();
        return view('teclados.show',compact('teclado','estatus','marcas','conectores','modelos','tamaños'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'serial'=>'required|max:30',
            'observation'=>'required|max:100|min:10',
        ]);
        $keyboard=keyboard::find($request->keyboard_id);       
        if(is_null($keyboard->equipment)){
            $keyboard->update($request->all());
        }else{
            return back()->with('error','No se puede Actualizar este registro porque pertenece a una workstation');
        }
        
        return back()->with('mensaje','Registro del teclado actualizado');
    }   
    public function delete(Request $request){
        
        $keyboard = keyboard::find($request->keyboard_id); 
        $keyboard->delete();       
        return back();
    }
}
