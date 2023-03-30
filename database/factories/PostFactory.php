<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'short_description' => $this->faker->text,
            'desctiption' => $this->faker->text,
            'date' => date("Y-m-d H:i:s"),
        ];
    }
}
