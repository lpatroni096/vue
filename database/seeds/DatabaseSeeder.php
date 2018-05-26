<?php

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
        $this->call(Alumno::class);
        $this->call(Curso::class);
        $this->call(AlumnoCurso::class);
    }
}
