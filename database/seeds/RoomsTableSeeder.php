<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = \App\Hotel::all();
        $roomTypes = \App\RoomType::pluck('id');

        foreach($hotels as $hotel)
        {
            for($i = 1; $i <= mt_rand(10,50); $i++)
            {
                $hotel->hotelRooms()->create([
                    'name' => mt_rand(10,99),
                    'room_type_id' => $roomTypes->random()
                ]);
            }
        }
    }
}
