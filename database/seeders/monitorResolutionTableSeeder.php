<?php

namespace Database\Seeders;

use App\Models\monitorResolution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class monitorResolutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monitorResolutions=new monitorResolution;
        $monitorResolutions->create([
            'statu_id'=>1,
            'name'=>'800p (1280x800)',
            'description'=>'Sin descripción',
        ]);

        $monitorResolutions=new monitorResolution;
        $monitorResolutions->create([
            'statu_id'=>1,
            'name'=>'720p (1280x720)',
            'description'=>'Sin descripción',
        ]);
    }
}
