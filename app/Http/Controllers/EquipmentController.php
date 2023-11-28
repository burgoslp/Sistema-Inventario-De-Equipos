<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\monitor;
use App\Models\computer;
use App\Models\notebook;
use App\Models\equipment;
use App\Models\keyboard;
use App\Models\mouse;
use App\Models\statu;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    //

    public function index(){
        $equipments=equipment::paginate(10);
        return view('equipments.index',compact('equipments'));
    }

    public function create(){
        $laptops=notebook::all();
        $ordenadores=computer::all();
        $monitores=monitor::all();
        $ratones=mouse::all();
        $teclados=keyboard::all();
        $estatus=statu::all();
        return view('equipments.create',compact('laptops','ordenadores','monitores','ratones','teclados','estatus'));
    }

    public function store(Request $request){

        $data=$request->all();
        $this->validate($request, [
            'cod_oficina'=>'required',            
        ]);
        dd($request);
       
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
       
        equipment::create($data);
        
        return back()->with('mensaje','Equipo informático cargado');
    }

    public function show($id){
        $marcas=brand::all();
        $ordenadores=computer::all();
        $laptops=notebook::all();
        return view('equipments.show',compact('marcas','ordenadores','laptops'));
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
        }else{

            $data['notebook_id']=null;
            $data['computer_id']=null;
        }

        equipment::find($request->ram_id)->update($data);
       
        return back()->with('mensaje','Registro del equipo actualizado');
    } 

    public function delete(Request $request){
        $ram = equipment::find($request->ram_id); 
        $ram->delete();       
        return back();
    }
}
