<?php

namespace App\Http\Controllers;

use App\Models\brand;
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

    public function delete(Request $request){
        $ram = processor::find($request->ram_id); 
        $ram->delete();       
        return back();
    }
}
