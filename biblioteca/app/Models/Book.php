<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Genre;
use App\Models\Loan;

class Book extends Model
{
  use HasFactory;

  protected $fillable = [
    'genre_id',
    'name',
    'author',
    'status',
  ];

  protected function status(): Attribute
  {
    $status = [
      0 => 'Disponível',
      1 => 'Emprestado'
    ];

    return Attribute::make(
      get: fn ($value) => $status[$value],
    );
  }

  public function genre()
  {
    return $this->belongsTo(Genre::class);
  }

  public function loans()
  {
    return $this->hasMany(Loan::class);
  }
}
