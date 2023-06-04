<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->text(60),
            'director' => $this->faker->name,
            'year' => $this->faker->year,
            'genres' => [$this->faker->word, $this->faker->word],
            'rating' => $this->faker->randomFloat(1),
        ];
    }
}
