<?php

namespace App\Http\Controllers;

use App\Models\keyboardModel;
use Illuminate\Http\Request;

class keyboardModelsController extends Controller
{
    public function __construct(){
        $this->middleware('authAdmin');
    }
    
    public function index(){
        $keyboardModels=keyboardModel::all();
        return view('keyboardModels.index',compact('keyboardModels'));
    }

    public function create(){
        return view('keyboardModels.create');
    }
}
