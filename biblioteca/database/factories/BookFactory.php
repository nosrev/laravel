<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      return [
          'genre_id' => fake()->randomElement(\App\Models\Genre::pluck('id')),
          'name' => ucfirst(fake()->words(3, true)),
          'author' => fake()->name(),
      ];
    }
}
