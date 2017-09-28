<?php

namespace App\Traits\Panel;

trait MotoristTrait
{
    /**
     * Get all cars
     *
     * @return array
     */
    private function getCars()
    {
        $queryResult = $this->cars
            ->select('id', 'model as carModel', 'car_mark_id')
            ->with('mark')
            ->get();

        $cars = [];

        foreach($queryResult as $car) {
            $cars[$car->id] = $car->mark->name . ' ' . $car->carModel;
        }

        return $cars;
    }

    /**
     * @param bool $id
     */
    private function createOrUpdate($id = false)
    {
        if($id) $this->motorist = $this->motorist->find($id);

        $this->motorist->fill(
            request()->only('name', 'surname')
        );

        $this->motorist->save();

        $carId = request('car_id') ?: [];

        $this->motorist->cars()->sync($carId);
    }
}
