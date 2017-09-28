<?php

use Illuminate\Database\Seeder;

class CarMarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        $marks = ['Audi', 'Fiat', 'Skoda', 'Lamborghini', 'BMW', 'Mazda', 'Volkswagen', 'Nisan', 'Hammer',];

        foreach($marks as $mark) {
            $arr[] = ['name' => $mark];
        }

        DB::table('car_marks')->insert($arr);
    }
}
