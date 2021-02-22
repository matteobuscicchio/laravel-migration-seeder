<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CoursesList = [
            [
                'name' => 'Ginnastica',
            ],
            [
                'name' => 'Matematica',
            ],
            [
                'name' => 'Filosofia',
            ],
            [
                'name' => 'Storia',
            ],
            [
                'name' => 'Greco',
            ],
        ];

        foreach ($CoursesList as $courses) {
            $course = new Course();
            $course->name = $courses['name'];
            $course->save();
        }

    }
}
