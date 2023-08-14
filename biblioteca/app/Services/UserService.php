<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserService extends BaseService
{
  protected $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    parent::__construct($userRepository);
  }
}
