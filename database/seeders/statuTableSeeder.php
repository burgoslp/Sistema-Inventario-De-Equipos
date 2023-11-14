<?php

namespace Database\Seeders;

use App\Models\statu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class statuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $status=new statu();
        $status->create([
            'name'=>'Habilitado',
            'description'=>'Se encuentra visible para su uso',
        ]);

        $status=new statu;
        $status->create([
            'name'=>'Inhabilitado',
            'description'=>'No se encuentra visible para su uso',
        ]);
    }
}
