<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Loan;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    public function loans()
    {
      return $this->hasMany(Loan::class);
    }
}
