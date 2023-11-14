<?php

namespace Database\Seeders;

use App\Models\keyboardModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class keyboardModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keyboardModels=new keyboardModel;
        $keyboardModels->create([
            'statu_id'=>1,
            'name'=>'membrana',
            'description'=>'Sin descripción',
        ]);

        $keyboardModels=new keyboardModel;
        $keyboardModels->create([
            'statu_id'=>1,
            'name'=>'mecanico',
            'description'=>'Sin descripción',
        ]);

        $keyboardModels=new keyboardModel;
        $keyboardModels->create([
            'statu_id'=>1,
            'name'=>'Ergonómico',
            'description'=>'Sin descripción',
        ]);
    }
}
