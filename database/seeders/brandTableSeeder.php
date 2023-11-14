<?php

namespace Database\Seeders;

use App\Models\brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class brandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Hp',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Lenovo',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Apple',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Asus',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Acer',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'MSI',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Huawei',
            'description'=>'Sin descripción',
        ]);

        $brands=new brand;
        $brands->create([
            'statu_id'=>1,
            'name'=>'Otros',
            'description'=>'Sin descripción',
        ]);
    }
}
