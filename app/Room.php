<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'hotel_id',
    ];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function room_type()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
}
