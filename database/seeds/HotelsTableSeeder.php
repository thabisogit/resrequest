<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $hotels = [];

        foreach(range(1,5) as $id)
        {
            array_push($hotels, [
                'id' => $id,
                'name' => $faker->unique()->company
            ]);
        }

        \App\Hotel::insert($hotels);
    }
}
