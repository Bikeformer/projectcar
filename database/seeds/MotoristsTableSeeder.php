<?php

use Illuminate\Database\Seeder;

class MotoristsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Motorist::class, 20)->create();
    }
}
