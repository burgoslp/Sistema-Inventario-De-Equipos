<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\statu;
use App\Models\notebook;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class NotebookController extends Controller
{
    
    public function index(){
        $laptops=notebook::paginate(10);
        return view('laptops.index',compact('laptops'));
    }

    public function create(){
        $estatus=statu::all();
        $marcas=brand::all();
        return view('laptops.create',compact('estatus','marcas'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'serial'=>'required|max:30|unique:notebooks,serial',
            'observation'=>'required|max:100|min:10',
        ]);
            $data=$request->all();
            if ($imagen=$request->file('file')) {
                $ruta="img/laptops/";
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }
                
                $nombre_imagen=$imagen->getClientOriginalName();
                $imagen->move($ruta,$nombre_imagen);
                $data['image']=$nombre_imagen;
            } 
        
        $url = 'https://google.com'; // Reemplaza con la URL deseada
        $archivoName="qrimage_notebook_".$nombre_imagen;
        $ruta='qrcodes/laptops/';
        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        $archivo = public_path($ruta.$archivoName); // Ruta donde se guardará el código QR
        QrCode::format('png')->size(300)->generate($url, $archivo);
        $data['qrcode']=$archivoName;
        
        notebook::create($data);        
        
        return back()->with('mensaje','Laptop  Registrada');
    }

    public function show($id){
        $laptop=notebook::find($id);
        $estatus=statu::all();
        $marcas=brand::all();

        return view('laptops.show',compact('laptop','estatus','marcas'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'serial'=>'required|max:30',
            'observation'=>'required|max:100|min:10',
        ]);

        notebook::find($request->laptop_id)->update($request->all());
       
        return back()->with('mensaje','Registro de la laptop actualizado');
    }   

    public function delete(Request $request){
        $notebook = notebook::find($request->laptop_id); 
        $notebook->delete();       
        return back();
    }


}
