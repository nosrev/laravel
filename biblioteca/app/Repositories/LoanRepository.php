<?php
namespace App\Repositories;

use App\Models\Loan;

class LoanRepository extends BaseRepository
{
  protected $loan;

  public function __construct(Loan $loan)
  {
    parent::__construct($loan);
  }
}
