<?php

namespace App\Traits\Panel;

trait CarTrait
{
    /**
     * @param bool $id
     */
    private function createOrUpdate($id = false)
    {
        if($id) $this->car = $this->car->find($id);

        $this->car->fill(
            request()->only('model', 'description', 'car_mark_id')
        );

        $this->car->save();
    }
}