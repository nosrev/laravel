<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UsersController extends Controller
{
  protected $userService;

  public function __construct(UserService $userService)
  {
    $this->userService = $userService;
  }

  public function index()
  {
    $users = $this->userService->list();
    return view('user.list', ['users' => $users]);
  }

  public function edit($id)
  {
    $user = $this->userService->edit($id);
    return view('user.edit', ['user' => $user]);
  }

  public function update(Request $request, $id)
  {
    $this->userService->update($id, $request);
    return redirect()->route('users.index');
  }

  public function store(Request $request)
  {
    $this->userService->register($request);
    return redirect()->route('users.index');
  }

  public function destroy($id)
  {
    $this->userService->remove($id);
    return redirect()->route('users.index');
  }
}
