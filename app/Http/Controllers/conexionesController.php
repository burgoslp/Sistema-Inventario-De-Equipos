<?php

namespace App\Http\Controllers;

use App\Models\connection;
use Illuminate\Http\Request;

class conexionesController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $connections=connection::all();
        return view('conexiones.index',compact('connections'));
    }

    public function create(){
        return view('conexiones.create');
    }
}
