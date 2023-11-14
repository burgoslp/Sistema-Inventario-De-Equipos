<?php

namespace App\Http\Controllers;

use App\Models\monitorSize;
use Illuminate\Http\Request;

class monitorSizeController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $monitorSizes=monitorSize::all();
        return view('monitorSizes.index',compact('monitorSizes'));
    }

    public function create(){
        return view('monitorSizes.create');
    }
}
