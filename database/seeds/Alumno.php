<?php

use Illuminate\Database\Seeder;

class Alumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Alumno::class, 50)->create();
    }
}
