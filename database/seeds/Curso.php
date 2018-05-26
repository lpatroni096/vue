<?php

use Illuminate\Database\Seeder;

class Curso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Curso::class, 50)->create();
    }
}
