<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\statu;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function __construct()    {
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $users=User::paginate(5);
        return view('usuarios.index',compact('users'));
    }

    public function create(){
        return view('usuarios.create');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'username'=>'required|max:100',
            'email'=>'required|max:100',
            'password'=>'required|max:6'
            
        ]);
       
        User::create($request->all());
        
        return back()->with('mensaje','Conector creado');
    }

    public function show($id){
        $User=User::find($id);
        $status=statu::all();
        return view('usuarios.show',compact('User','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required|max:255'
        ]);

        User::find($request->User_id)->update($request->all());
       
        return back()->with('mensaje','Conector Actualizada');
    }   

    public function delete(Request $request){
        $User = User::find($request->User_id);
 
        $User->delete();

       
        return back();
    }
}
