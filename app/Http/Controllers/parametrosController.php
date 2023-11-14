<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parametrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('authAdmin');
    }
    
    public function index(){
        return view('parametros.index');
    }
}
