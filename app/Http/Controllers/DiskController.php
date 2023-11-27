<?php

namespace App\Http\Controllers;

use App\Models\disk;
use App\Models\brand;
use App\Models\computer;
use App\Models\notebook;
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

    public function show($id){
        $disk=disk::find($id);
        $marcas=brand::all();
        $ordenadores=computer::all();
        $laptops=notebook::all();
        return view('disks.show',compact('disk','marcas','ordenadores','laptops'));
    }

    public function update(Request $request){

        $data=$request->all();
        $this->validate($request, [
            'serial'=>'required',
            'capacidad'=>'required',
            'unidad'=>'required',
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

        disk::find($request->disk_id)->update($data);
       
        return back()->with('mensaje','Registro de disco actualizado');
    } 

    public function delete(Request $request){
        $disk = disk::find($request->disk_id); 
        $disk->delete();       
        return back();
    }
}
