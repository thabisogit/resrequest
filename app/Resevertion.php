<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resevertion extends Model
{
    protected $fillable = [
        'room_id','from_date','to_date','number_of_rooms','number_of_adults','number_of_children'
    ];


    public function room(){
        return $this->hasMany(Room::class);
    }
}
