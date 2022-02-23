<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = DB::table('grades');

        $grades->insert([
            'quartile' => 1,
            'course_name' => 'Programme and career orientation',
            'test_name' => 'Assessment exam',
            'EC' => 2.5,
            'lowest_passing_grade' => 5.5,
            'best_grade' => 8.4
        ]);

        $grades->insert([
            'quartile' => 1,
            'course_name' => 'Computer science basics',
            'test_name' => 'Written exam',
            'EC' => 5.0,
            'lowest_passing_grade' => 5.5,
            'best_grade' => 7.2
        ]);

        $grades->insert([
            'quartile' => 1,
            'course_name' => 'Programming basics',
            'test_name' => 'Case study exam',
            'EC' => 5.0,
            'lowest_passing_grade' => 5.5,
            'best_grade' => 10.0,
        ]);

        $grades->insert([
            'quartile' => 2,
            'course_name' => 'Programming basics',
            'test_name' => 'Test',
            'EC' => 5.0,
            'lowest_passing_grade' => 5.5,
            'best_grade' => 4,
        ]);
    }
}
