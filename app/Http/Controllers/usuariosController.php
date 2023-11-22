<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\statu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'password'=>'required|max:8'            
        ]);

        $user=new User;
        $user->statu_id=$request->statu_id;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        $user->roles()->attach(role::where('name', $request->role)->first());
        
        
        
        return back()->with('mensaje','Usuario creado');
    }

    public function show($id){
        $User=User::find($id);
        $status=statu::all();
        return view('usuarios.show',compact('User','status'));
    }

    public function update(Request $request){
       
        $this->validate($request, [
            'name'=>'required|max:100',
            'username'=>'required|max:100',
            'email'=>'required|max:100',
            'password'=>'required|max:8' 
        ]);

        
        $user=User::find($request->User_id);
        $user->statu_id=$request->statu_id;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
       
        return back()->with('mensaje','Usuario Actualizado');
    }   

    public function delete(Request $request){
        $User = User::find($request->user_id);
 
        $User->delete();

       
        return back();
    }
}
