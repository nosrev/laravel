<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\GenreRepository;

class GenreService extends BaseService
{
  protected $genreRepository;

  public function __construct(GenreRepository $genreRepository)
  {
    parent::__construct($genreRepository);
  }
}
