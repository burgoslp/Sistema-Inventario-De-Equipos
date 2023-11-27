<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qrcodeController extends Controller
{
    //

    public function show($componente,$name){
        
       return view('qrcodes.show',compact('componente','name'));
    }
}
