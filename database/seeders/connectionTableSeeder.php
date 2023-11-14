<?php

namespace Database\Seeders;

use App\Models\connection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class connectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connections=new connection;
        $connections->create([
            'statu_id'=>1,
            'name'=>'Inalambrico',
            'description'=>'Sin descripción',
        ]);

        $connections=new connection;
        $connections->create([
            'statu_id'=>1,
            'name'=>'Alambrico',
            'description'=>'Sin descripción',
        ]);
    }
}
