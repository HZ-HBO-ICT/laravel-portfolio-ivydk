<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ArticleSeeder::class);
        $this->call(FAQSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(Course::class);
    }
}
