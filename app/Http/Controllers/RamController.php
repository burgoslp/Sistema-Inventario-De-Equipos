<?php

namespace App\Http\Controllers;

use App\Models\ram;
use App\Models\brand;
use App\Models\computer;
use Illuminate\Http\Request;

class RamController extends Controller
{
    //


    public function index(){
        $rams=ram::paginate(10);
        return view('rams.index',compact('rams'));
    }

    public function create(){
        $marcas=brand::all();
        return view('rams.create',compact('marcas'));
    }

    public function store(Request $request){


        $data=$request->all();
        $this->validate($request, [
            'serial'=>'required|unique:rams,serial',
            'capacidad'=>'required',
            'unidad'=>'required',
            'frecuencia'=>'required',
        ]);
       
        $Valcadbusq=explode('|',$data['machine_id']);
        if(isset($Valcadbusq[1])){
            if($Valcadbusq[0] == 1 AND strlen($Valcadbusq[1]) !=0){//laptop
                $data['computer_id']=$Valcadbusq[1];
                $data['notebook_id']=null;
            }else if($Valcadbusq[0] == 0 AND strlen($Valcadbusq[1]) !=0){//ordenador
                $data['notebook_id']=$Valcadbusq[1];
                $data['computer_id']=null;
            }
        }
       
        ram::create($data);
        
        return back()->with('mensaje','Memoria ram creada');
    }

    public function show($id){
        $ram=ram::find($id);
        $marcas=brand::all();
        $ordenadores=computer::all();
        return view('rams.show',compact('ram','marcas','ordenadores'));
    }

    public function update(Request $request){

        $data=$request->all();
        $this->validate($request, [
            'serial'=>'required',
            'capacidad'=>'required',
            'unidad'=>'required',
            'frecuencia'=>'required',
            'modelo'=>'required',
            'tipo_memoria'=>'required'
        ]);

        $Valcadbusq=explode('|',$data['machine_id']);
        if(isset($Valcadbusq[1])){
            if($Valcadbusq[0] == 1 AND strlen($Valcadbusq[1]) !=0){//laptop
                $data['computer_id']=$Valcadbusq[1];
                $data['notebook_id']=null;
            }else if($Valcadbusq[0] == 0 AND strlen($Valcadbusq[1]) !=0){//ordenador
                $data['notebook_id']=$Valcadbusq[1];
                $data['computer_id']=null;
            }
        }

        ram::find($request->ram_id)->update($data);
       
        return back()->with('mensaje','Registro de la memoria actualizada');
    } 

    public function delete(Request $request){
        $ram = ram::find($request->ram_id); 
        $ram->delete();       
        return back();
    }
}
