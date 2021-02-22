<?php

use Faker\Generator as Faker;
use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
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
            $student = new Student();
            $student->name = $faker->name();
            $student->surname = $faker->name();
            $student->save();
        }
    }
}
