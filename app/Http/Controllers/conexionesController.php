<?php

namespace App\Http\Controllers;

use App\Models\statu;
use App\Models\connection;
use Illuminate\Http\Request;

class conexionesController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $connections=connection::paginate(5);
        return view('conexiones.index',compact('connections'));
    }

    public function create(){
        return view('conexiones.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        connection::create($request->all());
        
        return back()->with('mensaje','Conexión creada');
    }

    public function show($id){
        $connection=connection::find($id);
        $status=statu::all();
        return view('conexiones.show',compact('connection','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        connection::find($request->connection_id)->update($request->all());
       
        return back()->with('mensaje','Conexión Actualizada');
    }   

    public function delete(Request $request){
        $connection = connection::find($request->connection_id); 
        $connection->delete();       
        return back();
    }
}
