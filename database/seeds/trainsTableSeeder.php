<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train();
        
        $newTrain->agency = $faker->company();
        $newTrain->departure_station = $faker->city();
        $newTrain->arrive_station = $faker->city();
        $newTrain->departure_hour = $faker->time();
        $newTrain->arrive_hour = $faker->time();
        $newTrain->train_code = $faker->randomNumber(8, true);
        $newTrain->carriages = $faker->randomDigit();
        $newTrain->in_time = $faker->boolean();
        $newTrain->cancelled = $faker->boolean();
        $newTrain->current_date = '2022-07-12 14:58:03';

        $newTrain->save();
    }
}
