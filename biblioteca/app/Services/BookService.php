<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\BookRepository;

class BookService extends BaseService
{
  protected $bookRepository;

  public function __construct(BookRepository $bookRepository)
  {
    parent::__construct($bookRepository);
  }
}
