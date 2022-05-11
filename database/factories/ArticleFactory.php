<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->word(),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->realText(1000)
        ];
    }
    protected $model = Article::class;
}
