<?php

namespace App\Http\Controllers;

use App\Models\statu;
use App\Models\monitorSize;
use Illuminate\Http\Request;

class monitorSizeController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $monitorSizes=monitorSize::paginate(5);
        return view('monitorSizes.index',compact('monitorSizes'));
    }

    public function create(){
        return view('monitorSizes.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'cantidad'=>'required|max:100',
            'unidad'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        monitorSize::create($request->all());
        
        return back()->with('mensaje','Tamaño creado');
    }

    public function show($id){
        $monitorSize=monitorSize::find($id);
        $status=statu::all();
        return view('monitorSizes.show',compact('monitorSize','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'cantidad'=>'required|max:100',
            'unidad'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        monitorSize::find($request->monitorSize_id)->update($request->all());
       
        return back()->with('mensaje','Tamaño Actualizado');
    }   

    public function delete(Request $request){
        $monitorSize = monitorSize::find($request->monitorSize_id); 
        $monitorSize->delete();       
        return back();
    }
}
