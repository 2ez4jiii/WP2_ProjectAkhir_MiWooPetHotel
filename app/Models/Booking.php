<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'pet_name',
        'pet_gender',
        'start_date',
        'end_date',
        'note'
    ];

    public function room()
    {
        return $this->hasOne('App\Models\Room','id','room_id');
    }

}
