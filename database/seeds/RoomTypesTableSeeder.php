<?php

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $roomTypes = [];

        foreach(range(1,3) as $id)
        {
            array_push($roomTypes, [
                'id' => $id,
                'name' => $faker->unique()->word
            ]);
        }

        \App\RoomType::insert($roomTypes);
    }
}
