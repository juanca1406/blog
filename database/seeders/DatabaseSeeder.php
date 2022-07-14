<?php

namespace Database\Seeders;

use App\Models\curso;
use App\Models\user;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    
        //$this->call(Cursoseeder::class)
        user::factory(10)->create();
        Curso::factory(50)->create();
        // para conectar cursoseeder
    }
}
