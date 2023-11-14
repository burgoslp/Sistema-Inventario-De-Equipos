<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\statu;
use Illuminate\Http\Request;

class brandsController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $brands=brand::paginate(5);
        return view('brands.index',compact('brands'));
    }

    public function create(){

        return view('brands.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);
       
        brand::create($request->all());
        
        return back()->with('mensaje','Marca creada');
    }

    public function show($id){
        $brand=brand::find($id);
        $status=statu::all();
        return view('brands.show',compact('brand','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        brand::find($request->brand_id)->update($request->all());
       
        return back()->with('mensaje','Marca Actualizada');
    }   

    public function delete(Request $request){
        $brand = brand::find($request->brand_id);
 
        $brand->delete();

       
        return back();
    }
}
