<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();

        
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeThisMonth(),
                'orario_arrivo' => $faker->dateTimeThisMonth(),
                'codice_treno' => $faker->unique()->numberBetween(1000, 9999),
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
