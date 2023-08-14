<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
use App\Services\GenreService;

class BooksController extends Controller
{
  protected $bookService;

  public function __construct(BookService $bookService, GenreService $genreService)
  {
    $this->bookService = $bookService;
    $this->genreService = $genreService;
  }

  public function index(Request $request)
  {
    $genres = $this->genreService->list();

    if($request->query->count()) {
      if ($request->has('genre_id')) {
        $genreId = $request->get('genre_id');
        $books = $this->bookService->findBy('genre_id', $genreId);
      }
    } else {
      $books = $this->bookService->list();
    }

    return view('book.list', ['books' => $books, 'genres' => $genres]);
  }

  public function add()
  {
    $genres = $this->genreService->list();
    return view('book.add', ['genres' => $genres]);
  }

  public function edit($id)
  {
    $genres = $this->genreService->list();
    $book = $this->bookService->edit($id);
    return view('book.edit', ['book' => $book, 'genres' => $genres]);
  }

  public function update(Request $request, $id)
  {
    $this->bookService->update($id, $request);
    return redirect()->route('books.index');
  }

  public function store(Request $request)
  {
    $this->bookService->register($request);
    return redirect()->route('books.index');
  }

  public function destroy($id)
  {
    $this->bookService->remove($id);
    return redirect()->route('books.index');
  }
}
