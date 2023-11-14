<?php

namespace App\Http\Controllers;

use App\Models\monitorFrame;
use Illuminate\Http\Request;

class monitorFramesController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $monitorFrames=monitorFrame::all();
        return view('monitorFrames.index',compact('monitorFrames'));
    }

    public function create(){
        return view('monitorFrames.create');
    }
}
