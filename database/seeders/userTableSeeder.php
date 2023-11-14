<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        $user->name='Administrador';
        $user->username='administrador';
        $user->email='administrador@gmail.com';
        $user->password=Hash::make('123456');
        $user->save();
        $user->roles()->attach(role::where('name', 'Administrador')->first());

        $user=new User;
        $user->name='Tecnico';
        $user->username='tecnico';
        $user->email='tecnico@gmail.com';
        $user->password=Hash::make('123456');
        $user->save();
        $user->roles()->attach(role::where('name', 'Te cnico')->first());   
    }
}
