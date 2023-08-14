<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      return [
          'user_id' => fake()->randomElement(\App\Models\User::pluck('id')),
          'book_id' => fake()->randomElement(\App\Models\Book::pluck('id')),
          'return_date' => date('Y-m-d', strtotime("+7 day")),
          'status' => fake()->randomElement(['0', '1', '2']),
      ];
    }
}
