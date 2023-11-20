<?php

namespace App\Http\Controllers;

use App\Models\statu;
use Illuminate\Http\Request;
use App\Models\keyboardModel;

class keyboardModelsController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $keyboardModels=keyboardModel::paginate(5);
        return view('keyboardModels.index',compact('keyboardModels'));
    }

    public function create(){
        return view('keyboardModels.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        keyboardModel::create($request->all());
        
        return back()->with('mensaje','Modelo de teclado creado');
    }

    public function show($id){
        $keyboardModel=keyboardModel::find($id);
        $status=statu::all();
        return view('keyboardModels.show',compact('keyboardModel','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        keyboardModel::find($request->keyboardModel_id)->update($request->all());
       
        return back()->with('mensaje','Modelo de teclado Actualizado');
    }   

    public function delete(Request $request){
        $keyboardModel = keyboardModel::find($request->keyboardModel_id); 
        $keyboardModel->delete();       
        return back();
    }
}
