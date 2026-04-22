<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<10; $i++){
            
            $newTrain = new Train();

            $newTrain->company = $faker->company;
            $newTrain->train_code = $faker->bothify(' ??- ####');
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+1 month');
            $newTrain->arrival_time = $faker->dateTimeBetween('now', '+1 month');
            $newTrain->total_carriages = $faker->numberBetween(5, 20);
            $newTrain->is_on_time = $faker->boolean;
            $newTrain->is_cancelled = $faker->boolean;
            $newTrain->save();



        }
    }
}
