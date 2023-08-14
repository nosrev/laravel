<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      $genres = [
        ['title' => 'Ficção'],
        ['title' => 'Romance'],
        ['title' => 'Fantasia'],
        ['title' => 'Aventura']
      ];

      foreach ($genres as $genre) {
        \App\Models\Genre::create($genre);
      }
    }
}
