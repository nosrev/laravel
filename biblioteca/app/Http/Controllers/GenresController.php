<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GenreService;

class GenresController extends Controller
{
  protected $genreService;

  public function __construct(GenreService $genreService)
  {
    $this->genreService = $genreService;
  }

  public function index()
  {
    $genres = $this->genreService->list();
    return view('genre.list', ['genres' => $genres]);
  }

  public function edit($id)
  {
    $genre = $this->genreService->edit($id);
    return view('genre.edit', ['genre' => $genre]);
  }

  public function update(Request $request, $id)
  {
    $this->genreService->update($id, $request);
    return redirect()->route('genres.index');
  }

  public function store(Request $request)
  {
    $this->genreService->register($request);
    return redirect()->route('genres.index');
  }

  public function destroy($id)
  {
    $this->genreService->remove($id);
    return redirect()->route('genres.index');
  }
}
