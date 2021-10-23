<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'name',
    ];

    public function roomTypeRooms()
    {
        return $this->hasMany(Room::class, 'room_type_id', 'id');
    }
}
