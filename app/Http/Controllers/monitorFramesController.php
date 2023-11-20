<?php

namespace App\Http\Controllers;

use App\Models\statu;
use App\Models\monitorFrame;
use Illuminate\Http\Request;

class monitorFramesController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $monitorFrames=monitorFrame::paginate(5);
        return view('monitorFrames.index',compact('monitorFrames'));
    }

    public function create(){
        return view('monitorFrames.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'cantidad'=>'required|max:100',
            'unidad'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        monitorFrame::create($request->all());
        
        return back()->with('mensaje','Frecuencia creada');
    }

    public function show($id){
        $monitorFrame=monitorFrame::find($id);
        $status=statu::all();
        return view('monitorFrames.show',compact('monitorFrame','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'cantidad'=>'required|max:100',
            'unidad'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        monitorFrame::find($request->monitorFrame_id)->update($request->all());
       
        return back()->with('mensaje','Frecuencia Actualizada');
    }   

    public function delete(Request $request){
        $monitorFrame = monitorFrame::find($request->monitorFrame_id); 
        $monitorFrame->delete();       
        return back();
    }
}
