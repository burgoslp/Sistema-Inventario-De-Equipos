<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\statu;
use App\Models\computer;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ComputerController extends Controller
{
    public function index(){
        $computers=computer::paginate(10);
        return view('computers.index',compact('computers'));
    }

    public function create(){
        $estatus=statu::all();
        $marcas=brand::all();
        return view('computers.create',compact('estatus','marcas'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'serial'=>'required|max:30|unique:computers,serial',
            'observation'=>'required|max:100|min:10',
        ]);
            $data=$request->all();
            if ($imagen=$request->file('file')) {
                $ruta="img/computers/";
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                $nombre_imagen=$imagen->getClientOriginalName();
                $imagen->move($ruta,$nombre_imagen);
                $data['image']=$nombre_imagen;
            } 
        
        $url = 'https://google.com'; // Reemplaza con la URL deseada
        $archivoName="qrimage_computer_".$nombre_imagen;
        $ruta='qrcodes/computers/';
        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        $archivo = public_path($ruta.$archivoName); // Ruta donde se guardará el código QR
        QrCode::format('png')->size(300)->generate($url, $archivo);
        $data['qrcode']=$archivoName;
        
        computer::create($data);        
        
        return back()->with('mensaje','Ordenador  Registrado');
    }

    public function show($id){
        $computer=computer::find($id);
        $estatus=statu::all();
        $marcas=brand::all();

        return view('computers.show',compact('computer','estatus','marcas'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'serial'=>'required|max:30',
            'observation'=>'required|max:100|min:10',
        ]);

        computer::find($request->computer_id)->update($request->all());
       
        return back()->with('mensaje','Registro del ordenador actualizado');
    }   

    public function delete(Request $request){
        $computer = computer::find($request->computer_id); 
        $computer->delete();       
        return back();
    }
}
