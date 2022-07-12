<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Seeder;

class Cursoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new curso();

        $curso->name = "laravel";
        $curso->descripcion = "El mejor framework de php";
        $curso->categoria = "desarrollo web";

        $curso->save();

        $curso2 = new curso();

        $curso2->name = "laravel";
        $curso2->descripcion = "El mejor framework de php";
        $curso2->categoria = "desarrollo web";

        $curso2->save();
    }
}
