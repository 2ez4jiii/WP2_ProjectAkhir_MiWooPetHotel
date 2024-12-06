<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_tittle',
        'image',
        'description',
        'price',
        'wifi',
        'room_type'
    ];
}
