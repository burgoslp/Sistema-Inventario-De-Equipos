<?php

namespace App\Http\Controllers;

use App\Models\disk;
use App\Models\brand;
use Illuminate\Http\Request;

class DiskController extends Controller
{
    public function index(){
        $disks=disk::paginate(10);
        return view('disks.index',compact('disks'));
    }

    public function create(){
        $marcas=brand::all();
        return view('disks.create',compact('marcas'));
    }

    public function store(Request $request){

        
        $data=$request->all();
        $this->validate($request, [
            'serial'=>'required|unique:disks,serial',
            'capacidad'=>'required',
            'unidad'=>'required',
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
       
        disk::create($data);
        
        return back()->with('mensaje','Disco de almacenamiento creado');
    }

    public function delete(Request $request){
        $ram = disk::find($request->ram_id); 
        $ram->delete();       
        return back();
    }
}
