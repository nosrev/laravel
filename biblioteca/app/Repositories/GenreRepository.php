<?php
namespace App\Repositories;

use App\Models\Genre;

class GenreRepository extends BaseRepository
{
  protected $genre;

  public function __construct(Genre $genre)
  {
    parent::__construct($genre);
  }
}
