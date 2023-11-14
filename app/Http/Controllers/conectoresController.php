<?php

namespace App\Http\Controllers;

use App\Models\connector;
use Illuminate\Http\Request;

class conectoresController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $connectors= connector::all();
        return view('conectores.index',compact('connectors'));
    }

    public function create(){
        return view('conectores.create');
    }
}
