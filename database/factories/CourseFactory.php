<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'CU_code' => $this->faker->numberBetween(10000, 20000),
            'name' => $this->faker->colorName(),
            'credits' => $this->faker->numberBetween(1, 5),
            'passed_at' => $this->faker->time()
        ];
    }
}
