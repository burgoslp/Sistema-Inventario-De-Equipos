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
        $laptops=notebook::where('statu_id','1')->get();
        $ordenadores=computer::where('statu_id','1')->get();
        $monitores=monitor::where('statu_id','1')->get();
        $ratones=mouse::where('statu_id','1')->get();
        $teclados=keyboard::where('statu_id','1')->get();
        $estatus=statu::all();
        return view('equipments.create',compact('laptops','ordenadores','monitores','ratones','teclados','estatus'));
    }

    public function store(Request $request){

        $data=$request->all();
        $this->validate($request, [
            'cod_oficina'=>'required',
            'machine_id'=>['required',            
                    function ($attribute, $value, $fail) {
                        if ($value == '-1') {
                            $fail('El campo no puede tener el valor específico.');
                        }
                    }
                ],
            'monitor_id'=>[
                function ($attribute, $value, $fail) {
                    if ($value == '-1') {
                        $fail('El campo no puede tener el valor específico.');
                    }
                }
            ],
            'keyboard_id'=>[
                function ($attribute, $value, $fail) {
                    if ($value == '-1') {
                        $fail('El campo no puede tener el valor específico.');
                    }
                }
            ],
            'mouse_id'=>[
                function ($attribute, $value, $fail) {
                    if ($value == '-1') {
                        $fail('El campo no puede tener el valor específico.');
                    }
                }
            ],
                        
        ]);
       
        $Valcadbusq=explode('|',$data['machine_id']);
        if(isset($Valcadbusq[1])){
            if($Valcadbusq[0] == 1 AND strlen($Valcadbusq[1]) !=0){//1 ordenador
                $data['computer_id']=$Valcadbusq[1];
                $data['notebook_id']=null;
                
            }else if($Valcadbusq[0] == 0 AND strlen($Valcadbusq[1]) !=0){// 0 laptop
                $data['notebook_id']=$Valcadbusq[1];
                $data['computer_id']=null;               
            }
       

        }
        

        equipment::create($data);
        monitor::find($data['monitor_id'])->update(['statu_id'=>2]);
        keyboard::find($data['keyboard_id'])->update(['statu_id'=>2]);
        mouse::find($data['mouse_id'])->update(['statu_id'=>2]);
        if(!is_null($data['computer_id'])){
            computer::find($data['computer_id'])->update(['statu_id'=>2]);
        }else if(!is_null($data['notebook_id'])){
            notebook::find($data['notebook_id'])->update(['statu_id'=>2]);
        }        
        return back()->with('mensaje','Equipo informático cargado');
    }

    public function show($id){

        $equipment=equipment::find($id);
        $laptops=notebook::all();
        $ordenadores=computer::all();
        $monitores=monitor::all();
        $ratones=mouse::all();
        $teclados=keyboard::all();
        $estatus=statu::all();
        
        return view('equipments.show',compact('equipment','laptops','ordenadores','monitores','ratones','teclados','estatus'));
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
        $equipment = equipment::find($request->equipment_id); 

       
        $equipment->monitor->update(['statu_id'=>'1']);
        $equipment->keyboard->update(['statu_id'=>'1']);
        $equipment->mouse->update(['statu_id'=>'1']);
        if(!is_null($equipment->computer)){
            $equipment->computer->update(['statu_id'=>'1']);
        }
        if(!is_null($equipment->notebook)){
            $equipment->notebook->update(['statu_id'=>'1']);
        }
        $equipment->delete();       
        return back();
    }
}
