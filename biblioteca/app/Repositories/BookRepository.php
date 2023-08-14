<?php
namespace App\Repositories;

use App\Models\Book;

class BookRepository extends BaseRepository
{
  protected $book;

  public function __construct(Book $book)
  {
    parent::__construct($book);
  }
}
