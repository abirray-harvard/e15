<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Available_vaccine;
use Carbon\Carbon; # We’ll use this library to generate timestamps
use Faker\Factory; # We’ll use this library to generate random/fake data

class AvailableVaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addVaccines();
        //
    }

    private function addVaccines() {
        $vaccine = new Available_vaccine();
        $vaccine->vaccine = 'Pfizer-BioNTech';
        $vaccine->age_required = '16+';
        $vaccine->type = 'mRNA';
        $vaccine->effectivity = '95%';
        $vaccine->price = 19.50;
        $vaccine->quantity = 99;
        $vaccine->save();

        $vaccine2 = new Available_vaccine();
        $vaccine2->vaccine = 'Moderna';
        $vaccine2->age_required = '18+';
        $vaccine2->type = 'Adenovirus-based';
        $vaccine2->effectivity = '95%';
        $vaccine2->price = 25;
        $vaccine2->quantity = 99;
        $vaccine2->save();

        $vaccine3 = new Available_vaccine();
        $vaccine3->vaccine = 'Johnson & Johnson';
        $vaccine3->age_required = '18+';
        $vaccine3->type = 'mRNA';
        $vaccine3->effectivity = '72%';
        $vaccine3->price = 10;
        $vaccine3->quantity = 99;
        $vaccine3->save();
    }

    private function addRandomlyGeneratedVaccinesUsingFaker() {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $vaccine = new Available_vaccine();

            $title = $faker->word;
            $vaccine->vaccine = $faker->word;
            $vaccine->age_required = $faker->word;
            $vaccine->type = $faker->word;
            $vaccine->effectivity = $faker->word;
            $vaccine->price = $faker->randomFloat(2, 10, 20);
            $vaccine->quantity = $faker->numberBetween(50, 100);
            
            $vaccine->save();
            
        }
    }
}
