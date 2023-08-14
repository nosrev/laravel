<?php
namespace App\Repositories;

class BaseRepository
{
  protected $obj;

  protected function __construct(object $obj)
  {
    $this->obj = $obj;
  }

  public function all(): object
  {
    return $this->obj::all();
  }

  public function find(int $id): object
  {
    return $this->obj::findOrFail($id);
  }

  public function findByColumn(string $column, $value): object
  {
    return $this->obj::where($column, $value)->get();
  }

  public function save(array $attributes): object
  {
    return $this->obj::create($attributes);
  }

  public function update(int $id, array $attributes): bool
  {
    return $this->obj::whereId($id)->update($attributes);
  }

  public function delete(int $id): bool
  {
    return $this->obj::destroy($id);
  }
}
