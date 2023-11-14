<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTecnicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('authTecnico');
    }
    public function index(){
        return view('tecnico.dashboard');
    }
}
