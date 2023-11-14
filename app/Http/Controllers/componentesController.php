<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class componentesController extends Controller
{
    public function index(){
        return view('componentes.index');
    }
}
