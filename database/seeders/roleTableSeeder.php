<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role=new role;
        $role->create([
            'name'=>'Administrador',
            'description'=>'Rol de administrador del sistema',
        ]);

        $role=new role;
        $role->create([
            'name'=>'Tecnico',
            'description'=>'Rol de Técnico del sistema',
        ]);
    }
}
