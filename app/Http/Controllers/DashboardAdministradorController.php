<?php

namespace App\Http\Controllers;

use App\Models\computer;
use App\Models\disk;
use App\Models\keyboard;
use App\Models\monitor;
use App\Models\mouse;
use App\Models\processor;
use App\Models\ram;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdministradorController extends Controller
{   
    public function __construct()
    {
        $this->middleware('authAdmin');
    }
    public function index(){
        $monitores=monitor::all();
        $teclados=keyboard::all();
        $ratones=mouse::all();
        $ordenadores=computer::all();
        $ramOrdenador=ram::where('tipo_memoria','1')->get();
        $diskOrdenador=disk::where('tipo_memoria','1')->get();
        $procesadorOrdenador=processor::all();
        $ramLaptops=ram::where('tipo_memoria','2')->get();
        $diskLaptops=disk::where('tipo_memoria','2')->get();
        $usuarios=User::all();
        return view('administrador.dashboard',compact('monitores','teclados','ratones','ordenadores','ramOrdenador','diskOrdenador','procesadorOrdenador','ramLaptops','diskLaptops','usuarios'));
    }
}
