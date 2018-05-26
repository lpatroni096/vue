<?php

use Illuminate\Database\Seeder;

class AlumnoCurso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AlumnoCurso::class, 500)->create();
    }
}
