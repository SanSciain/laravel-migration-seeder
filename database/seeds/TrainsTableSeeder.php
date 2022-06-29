<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->company;
            $train->arr_station = $faker->city . ", " . $faker->stateAbbr;
            $train->dep_station = $faker->city . ", " . $faker->stateAbbr;
            $train->arr_time = $faker->time($format = 'H:i:s', $max = 'now');
            $train->dep_time = $faker->time($format = 'H:i:s', $max = 'now');
            $train->train_code = rand(10000, 99999);
            $train->wagons = rand(1, 15);
            $train->on_time = rand(0, 1);
            $train->canceled = rand(0, 1);

            $train->save();
        }
    }
}
