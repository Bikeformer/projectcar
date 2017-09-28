<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname',
    ];

    /**
     * Количество отображаемых объектов на странице
     *
     * @var int
     */
    protected $perPage = 10;

    /**
     * BelongsToMany Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }

}
