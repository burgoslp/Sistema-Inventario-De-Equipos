<?php

namespace App\Http\Controllers;

use App\Models\keyboardSize;
use Illuminate\Http\Request;

class keyboardSizesController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $keyboardSizes=keyboardSize::all();
        return view('keyboardSizes.index',compact('keyboardSizes'));
    }

    public function create(){
        return view('keyboardSizes.create');
    }

    
}
