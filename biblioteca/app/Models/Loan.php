<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\User;
use App\Models\Book;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'return_date',
        'status',
    ];

    protected $dates = ['return_date'];

    protected function returnDate(): Attribute
    {
      return Attribute::make(
        get: fn ($value) => date("d-m-Y", strtotime($value)),
      );
    }

    protected function status(): Attribute
    {
      $status = [
        0 => '',
        1 => 'Devolvido',
        2 => 'Atrasado'
      ];

      return Attribute::make(
        get: fn ($value) => $status[$value],
      );
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function book()
    {
      return $this->belongsTo(Book::class);
    }
}
