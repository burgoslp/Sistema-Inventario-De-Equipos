<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\keyboardModel;
use App\Models\monitorFrame;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(roleTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(statuTableSeeder::class);
        $this->call(brandTableSeeder::class);
        $this->call(conectorTableSeeder::class);
        $this->call(connectionTableSeeder::class);
        $this->call(monitorFrameTableSeeder::class);
        $this->call(monitorResolutionTableSeeder::class);
        $this->call(monitorSizeTableSeeder::class);
        $this->call(keyboardModelTableSeeder::class);
        $this->call(keyboardSizeTableSeeder::class);
    }
}
