<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\connection;
use App\Models\mouse;
use App\Models\statu;
use App\Models\connector;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MouseController extends Controller
{
    public function index(){
        $ratones=mouse::paginate(10);
        return view('ratones.index',compact('ratones'));
    }

    public function create(){
        $estatus=statu::all();
        $marcas=brand::all();
        $conectores=connector::all();
        $conexiones=connection::all();
        return view('ratones.create',compact('estatus','marcas','conectores','conexiones'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'serial'=>'required|max:30|unique:mice,serial',
            'observation'=>'required|max:100|min:10',
        ]);
            $data=$request->all();
            if ($imagen=$request->file('file')) {
                $ruta="img/ratones/";
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                $nombre_imagen=$imagen->getClientOriginalName();
                $imagen->move($ruta,$nombre_imagen);
                $data['image']=$nombre_imagen;
            } 
        
        
        $url = 'https://google.com'; // Reemplaza con la URL deseada
        $archivoName="qrimage_mouse_".$nombre_imagen;
        $ruta='qrcodes/ratones/';
        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        $archivo = public_path($ruta.$archivoName); // Ruta donde se guardará el código QR
        QrCode::format('png')->size(300)->generate($url, $archivo);
        $data['qrcode']=$archivoName;
        
        mouse::create($data);        
        
        return back()->with('mensaje','Mouse Registrado');
    }

    public function show($id){
        $raton=mouse::find($id);
        $estatus=statu::all();
        $marcas=brand::all();
        $conectores=connector::all();
        $conexiones=connection::all();
        return view('ratones.show',compact('raton','estatus','marcas','conectores','conexiones'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'serial'=>'required|max:30',
            'observation'=>'required|max:100|min:10',
        ]);

        $mouse=mouse::find($request->mouse_id);       
        if(is_null($mouse->equipment)){
            $mouse->update($request->all());
        }else{
            return back()->with('error','No se puede Actualizar este registro porque pertenece a una workstation');
        }


       
        return back()->with('mensaje','Registro del mouse actualizado');
    }   

    public function delete(Request $request){
        $mouse = mouse::find($request->mouse_id); 
        $mouse->delete();       
        return back();
    }
}
