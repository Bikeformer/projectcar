<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarMarksTableSeeder::class);
        $this->call(MotoristsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(CarMotoristTableSeeder::class);
    }
}
