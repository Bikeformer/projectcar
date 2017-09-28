<?php

use Illuminate\Database\Seeder;

class CarMotoristTableSeeder extends Seeder
{
    /**
     * Создаем связи между водителями и автомобилями
     *
     * @return void
     */
    public function run()
    {
        $carsCount = \App\Car::count();
        $motoristCount = \App\Motorist::count();

        $arr = [];

        for($i = 1; $i <= $motoristCount; $i++) {
            $arr[] = [
                'car_id' => rand(1, $carsCount),
                'motorist_id' => $i,
            ];
        }

        DB::table('car_motorist')->insert($arr);
    }
}
