<?php

namespace Database\Seeders;

use App\Models\keyboardSize;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class keyboardSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'Completo',
            'description'=>'Sin descripción',
        ]);

        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'1800 Compact',
            'description'=>'Sin descripción',
        ]);

        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'TKL (Tenkeyless u 80%)',
            'description'=>'Sin descripción',
        ]);

        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'75%',
            'description'=>'Sin descripción',
        ]);

        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'60%',
            'description'=>'Sin descripción',
        ]);

        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'40%',
            'description'=>'Sin descripción',
        ]);

        $keyboardSizes=new keyboardSize;
        $keyboardSizes->create([
            'statu_id'=>1,
            'name'=>'Number PAD',
            'description'=>'Sin descripción',
        ]);
    }
}
