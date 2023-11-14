<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historicosController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }

    public function index(){
        return view('historicos.index');
    }
}
