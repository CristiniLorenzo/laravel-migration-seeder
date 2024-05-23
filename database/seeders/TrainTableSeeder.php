<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departures_station = $faker->city();
            $newTrain->arrivals_station = $faker->city();
            $newTrain->departures_hour = $faker->dateTimeBetween('-1 week', '2 days');
            $newTrain->arrivals_hour = $faker->dateTimeBetween('-1 week', '1 week');
            $newTrain->train_code = $faker->randomDigit();
            $newTrain->wagons_number = $faker->numberBetween(1, 50);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
