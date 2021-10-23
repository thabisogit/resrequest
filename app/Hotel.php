<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function hotelRooms()
    {
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }
}
