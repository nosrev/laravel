<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\LoanRepository;

class LoanService extends BaseService
{
  protected $loanRepository;

  public function __construct(LoanRepository $loanRepository)
  {
    parent::__construct($loanRepository);
  }
}
