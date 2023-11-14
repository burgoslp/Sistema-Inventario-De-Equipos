<?php

namespace Database\Seeders;

use App\Models\monitorFrame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class monitorFrameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitorFrames=new monitorFrame;
        $monitorFrames->create([
            'statu_id'=>1,
            'cantidad'=>60,
            'unidad'=>'Hz',
            'description'=>'Sin descripción',
        ]);

        $monitorFrames=new monitorFrame;
        $monitorFrames->create([
            'statu_id'=>1,
            'cantidad'=>144,
            'unidad'=>'Hz',
            'description'=>'Sin descripción',
        ]);
    }
}
