<?php

namespace Database\Seeders;

use App\Models\connector;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class conectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connectors=new connector;
        $connectors->create([
            'statu_id'=>1,
            'name'=>'Hdmi',
            'description'=>'Sin descripción',
        ]);

        $connectors=new connector;
        $connectors->create([
            'statu_id'=>1,
            'name'=>'Vga',
            'description'=>'Sin descripción',
        ]);

        $connectors=new connector;
        $connectors->create([
            'statu_id'=>1,
            'name'=>'Dvi',
            'description'=>'Sin descripción',
        ]);

        $connectors=new connector;
        $connectors->create([
            'statu_id'=>1,
            'name'=>'Usb',
            'description'=>'Sin descripción',
        ]);

        $connectors=new connector;
        $connectors->create([
            'statu_id'=>1,
            'name'=>'Ps2',
            'description'=>'Sin descripción',
        ]);

        
    }
}
