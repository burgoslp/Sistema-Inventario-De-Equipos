<?php

namespace App\Http\Controllers;

use App\Models\mouse;
use App\Models\monitor;
use App\Models\computer;
use App\Models\keyboard;
use App\Models\notebook;
use Illuminate\Http\Request;

class estadisticasController extends Controller
{   

    public function __construct(){
        $this->middleware('authAdmin');
    }
    public function index(){

        $monitores=monitor::all();
        $teclados=keyboard::all();
        $ratones=mouse::all();
        $ordenadores=computer::all();
        $laptops=notebook::all();
        return view('estadisticas.index',compact('monitores','teclados','ratones','ordenadores','laptops'));
    }
}
