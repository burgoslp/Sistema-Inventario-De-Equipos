<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workstationsController extends Controller
{
    public function index(){
        return view('workstations.index');
    }
}
