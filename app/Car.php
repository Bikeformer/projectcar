<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'car_mark_id', 'description',
    ];

    /**
     * Количество отображаемых объектов на странице
     *
     * @var int
     */
    protected $perPage = 10;

    /**
     * BelongsTo CarMark
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mark()
    {
        return $this->belongsTo(CarMark::class, 'car_mark_id');
    }
}
