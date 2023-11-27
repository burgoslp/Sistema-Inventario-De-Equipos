<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\statu;
use App\Models\monitor;
use App\Models\connector;
use App\Models\monitorSize;
use Illuminate\Support\Str;
use App\Models\monitorFrame;
use Illuminate\Http\Request;
use App\Models\monitorResolution;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MonitorController extends Controller
{
    public function index(){
        $monitores=monitor::paginate(10);
        return view('monitores.index',compact('monitores'));
    }

    public function create(){
        $estatus=statu::all();
        $marcas=brand::all();
        $conectores=connector::all();
        $resoluciones=monitorResolution::all();;
        $tamaños=monitorSize::all();
        $frecuencias=monitorFrame::all();
        return view('monitores.create',compact('estatus','marcas','conectores','resoluciones','tamaños','frecuencias'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'serial'=>'required|max:30|unique:monitors,serial',
            'observation'=>'required|max:100|min:10',
        ]);
            $data=$request->all();
            if ($imagen=$request->file('file')) {
                $ruta="img/monitores/";
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                $nombre_imagen=$imagen->getClientOriginalName();
                $imagen->move($ruta,$nombre_imagen);
                $data['image']=$nombre_imagen;
            } 
        
        
        $url = 'https://google.com'; // Reemplaza con la URL deseada
        $archivoName="qrimage_monitor_".$nombre_imagen;
        $ruta='qrcodes/monitores/';
        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        $archivo = public_path($ruta.$archivoName); // Ruta donde se guardará el código QR
        QrCode::format('png')->size(300)->generate($url, $archivo);
        $data['qrcode']=$archivoName;
        
        monitor::create($data);        
        
        return back()->with('mensaje','Monitor Registrado');
    }

    public function show($id){
        $monitor=monitor::find($id);
        $estatus=statu::all();
        $marcas=brand::all();
        $conectores=connector::all();
        $resoluciones=monitorResolution::all();;
        $tamaños=monitorSize::all();
        $frecuencias=monitorFrame::all();
        return view('monitores.show',compact('monitor','estatus','marcas','conectores','resoluciones','tamaños','frecuencias'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'serial'=>'required|max:30',
            'observation'=>'required|max:100|min:10',
        ]);




        monitor::find($request->monitor_id)->update($request->all());
       
        return back()->with('mensaje','Registro del monitor actualizado');
    }   

    public function delete(Request $request){
        $monitor = monitor::find($request->monitor_id); 
        $monitor->delete();       
        return back();
    }
}
