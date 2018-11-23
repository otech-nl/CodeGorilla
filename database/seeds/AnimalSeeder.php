<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Animal::insert([
            ['naam' => 'Henk', 'soort' => 'gorilla'],
            ['naam' => 'Sik', 'soort' => 'geit'],
            ['naam' => 'Beau', 'soort' => 'bonobo'],
        ]);
    }
}
