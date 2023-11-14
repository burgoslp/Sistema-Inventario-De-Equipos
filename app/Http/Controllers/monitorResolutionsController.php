<?php

namespace App\Http\Controllers;

use App\Models\monitorResolution;
use Illuminate\Http\Request;

class monitorResolutionsController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $monitorResolutions=monitorResolution::all();
        return view('monitorResolutions.index',compact('monitorResolutions'));
    }

    public function create(){
        return view('monitorResolutions.create');
    }
}
