<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoanService;
use App\Services\UserService;
use App\Services\BookService;

class LoansController extends Controller
{
  protected $loanService;

  public function __construct(LoanService $loanService, UserService $userService, BookService $bookService)
  {
    $this->loanService = $loanService;
    $this->userService = $userService;
    $this->bookService = $bookService;
  }

  public function index()
  {
    $loans = $this->loanService->list();
    return view('loan.list', ['loans' => $loans]);
  }

  public function add()
  {
    $users = $this->userService->list();
    $books = $this->bookService->list();
    return view('loan.add', ['users' => $users, 'books' => $books]);
  }

  public function edit($id)
  {
    $users = $this->userService->list();
    $books = $this->bookService->list();
    $loan = $this->loanService->edit($id);
    return view('loan.edit', ['loan' => $loan, 'users' => $users, 'books' => $books]);
  }

  public function update(Request $request, $id)
  {
    $this->loanService->update($id, $request);
    return redirect()->route('loans.index');
  }

  public function store(Request $request)
  {
    $this->loanService->register($request);
    return redirect()->route('loans.index');
  }

  public function destroy($id)
  {
    $this->loanService->remove($id);
    return redirect()->route('loans.index');
  }
}
