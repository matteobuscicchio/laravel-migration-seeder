<?php

use Faker\Generator as Faker;
use App\Clas;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 15 ; $i++) {
            $nClas = new Clas();
            $nClas->section = $faker->randomLetter();
            $nClas->section_number = $faker->numberBetween(1, 5);
            $nClas->save();
        }
    }
}
