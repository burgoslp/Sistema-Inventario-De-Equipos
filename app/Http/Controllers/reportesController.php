<?php

namespace App\Http\Controllers;

use App\Models\keyboard;
use App\Models\monitor;
use App\Models\mouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportesController extends Controller
{
    public function index(){
        $monitores=monitor::all();
        $teclados=keyboard::all();
        $ratones=mouse::all();

        return view('reportes.index',compact('monitores','teclados','ratones'));
    }

    public function show(Request $request){

        $this->validate($request, [
            'equipo'=>['required',            
                    function ($attribute, $value, $fail) {
                        if ($value == '-1') {
                            $fail('El campo no puede tener el valor específico.');
                        }
                    }
                ]           
        ]);

        $data=$request->all();
        $equipos=DB::table($data['equipo']);

        if($data['desde'] <> null && $data['hasta'] <> null){
            $equipos->whereBetween('created_at',[$data['desde'], $data['hasta']]);
        }

        if($data['serial'] <> null ){
            $equipos->where('serial',$data['serial']);
        }
        $equipos=$equipos->get();       

        return view('reportes.show',compact('equipos'));
    }
}
