<?php

namespace Database\Seeders;

use App\Models\monitorSize;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class monitorSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>17,
            'unidad'=>'Pulgadas',
            'description'=>'Sin descripción',
        ]);

        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>19,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);


        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>20,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);

        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>22,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);

        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>24,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);

        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>32,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);

        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>40,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);

        $monitorSizes=new monitorSize;
        $monitorSizes->create([
            'statu_id'=>1,
            'cantidad'=>42,
            'unidad'=>'pulgadas',
            'description'=>'Sin descripción',
        ]);

    }
}
