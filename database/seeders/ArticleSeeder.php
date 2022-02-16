<?php

namespace Database\Seeders;

use App\Models\Article;
use Database\Factories\ArticleFactory;
use Faker\Provider\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('articles')->insert(
//            [
//                'title' => Str::random(10),
//                'excerpt' => Str::random(50),
//                'body' => Str::random(100)
//            ]
//        );

        // TODO: add existing blog posts

        Article::factory()
            ->count(100)
            ->create();
    }
}
