<?php

namespace App\Http\Controllers;

use App\Models\ram;
use App\Models\disk;
use App\Models\User;
use App\Models\mouse;
use App\Models\monitor;
use App\Models\computer;
use App\Models\keyboard;
use App\Models\processor;
use Illuminate\Http\Request;

class DashboardTecnicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('authTecnico');
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
        return view('tecnico.dashboard',compact('monitores','teclados','ratones','ordenadores','ramOrdenador','diskOrdenador','procesadorOrdenador','ramLaptops','diskLaptops','usuarios'));

    }
}
