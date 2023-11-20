<?php

namespace App\Http\Controllers;

use App\Models\statu;
use App\Models\connector;
use Illuminate\Http\Request;

class conectoresController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $connectors= connector::paginate(5);
        return view('conectores.index',compact('connectors'));
    }

    public function create(){
        return view('conectores.create');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        connector::create($request->all());
        
        return back()->with('mensaje','Conector creado');
    }

    public function show($id){
        $connector=connector::find($id);
        $status=statu::all();
        return view('conectores.show',compact('connector','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        connector::find($request->connector_id)->update($request->all());
       
        return back()->with('mensaje','Conector Actualizada');
    }   

    public function delete(Request $request){
        $connector = connector::find($request->connector_id);
 
        $connector->delete();

       
        return back();
    }
}
