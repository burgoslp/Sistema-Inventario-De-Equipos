<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\computer;
use App\Models\notebook;
use App\Models\processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function index(){
        $processors=processor::paginate(10);
        return view('processors.index',compact('processors'));
    }

    public function create(){
        $marcas=brand::all();
        return view('processors.create',compact('marcas'));
    }

    public function store(Request $request){

        
        $data=$request->all();
        $this->validate($request, [
            'serial'=>'required|unique:processors,serial',
            'name'=>'required',
            'observation'=>'required',
        ]);
       
       if($data['computer_id']==0){
            $data['computer_id']=null;
       }
       
        processor::create($data);
        
        return back()->with('mensaje','Procesador creado');
    }

    public function show($id){
        $processor=processor::find($id);
        $marcas=brand::all();
        $ordenadores=computer::all();
        $laptops=notebook::all();
        return view('processors.show',compact('processor','marcas','ordenadores','laptops'));
    }

    public function update(Request $request){

        $data=$request->all();
        $this->validate($request, [
            'serial'=>'required',
            'name'=>'required',
            'observation'=>'required',
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
            $data['computer_id']=null;
        }

        processor::find($request->processor_id)->update($data);
       
        return back()->with('mensaje','Registro del procesador actualizado');
    }

    public function delete(Request $request){
        $processor = processor::find($request->processor_id); 
        $processor->delete();       
        return back();
    }
}
