<?php

namespace App\Http\Controllers;

use App\Models\statu;
use Illuminate\Http\Request;
use App\Models\monitorResolution;

class monitorResolutionsController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $monitorResolutions=monitorResolution::paginate(5);
        return view('monitorResolutions.index',compact('monitorResolutions'));
    }

    public function create(){
        return view('monitorResolutions.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        monitorResolution::create($request->all());
        
        return back()->with('mensaje','Resolución creada');
    }

    public function show($id){
        $monitorResolution=monitorResolution::find($id);
        $status=statu::all();
        return view('monitorResolutions.show',compact('monitorResolution','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        monitorResolution::find($request->monitorResolution_id)->update($request->all());
       
        return back()->with('mensaje','Resolución Actualizada');
    }   

    public function delete(Request $request){
        $monitorResolution = monitorResolution::find($request->monitorResolution_id); 
        $monitorResolution->delete();       
        return back();
    }
}
