<?php

namespace App\Http\Controllers;

use App\Models\statu;
use App\Models\keyboardSize;
use Illuminate\Http\Request;

class keyboardSizesController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $keyboardSizes=keyboardSize::paginate(5);
        return view('keyboardSizes.index',compact('keyboardSizes'));
    }

    public function create(){
        return view('keyboardSizes.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        keyboardSize::create($request->all());
        
        return back()->with('mensaje','Tamaño de teclado creado');
    }

    public function show($id){
        $keyboardSize=keyboardSize::find($id);
        $status=statu::all();
        return view('keyboardSizes.show',compact('keyboardSize','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        keyboardSize::find($request->keyboardSize_id)->update($request->all());
       
        return back()->with('mensaje','Tamaño de teclado Actualizado');
    }   

    public function delete(Request $request){
        $keyboardSize = keyboardSize::find($request->keyboardSize_id); 
        $keyboardSize->delete();       
        return back();
    }
}
