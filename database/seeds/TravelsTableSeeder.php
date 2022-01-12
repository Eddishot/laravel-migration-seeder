<?php

use Illuminate\Database\Seeder;
use App\travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newTravel = new Travel();
            $newTravel-> airport = $faker->name();
            $newTravel-> country = $faker->state();
            $newTravel-> description = $faker->realText();
            $newTravel-> airline = $faker->name();
            $newTravel->save();
            

        }
    }
}
