<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        if(!Auth::check()){
            return view('auth.index');
        }else{
            if(auth()->user()->validaRolAdministrador()){
                return redirect()->route('administrador.index');  
            }
        }    
        return redirect()->route('tecnico.index');   
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>"required|email",
            'password'=>"required"
        ]);

       if(!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('mensaje','Credenciales Incorrectas');
       }    
       
       if(auth()->user()->validaRolAdministrador()){
           return redirect()->route('administrador.index');  
       }

       return redirect()->route('tecnico.index');       
   }
}
