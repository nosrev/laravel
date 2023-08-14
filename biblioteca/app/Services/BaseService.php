<?php
namespace App\Services;

use Illuminate\Http\Request;

class BaseService
{
  protected $obj;

  protected function __construct(object $obj)
  {
    $this->obj = $obj;
  }

  public function list()
  {
    return $this->obj->all();
  }

  public function edit($id)
  {
    return $this->obj->find($id);
  }

  public function findBy(string $column, $value)
  {
    return $this->obj->findByColumn($column, $value);
  }

  public function update($id, Request $request)
  {
    $attributes = $request->except('_token');
    $this->obj->update($id, $attributes);
  }

  public function register(Request $request)
  {
    $attributes = $request->except('_token');
    $this->obj->save($attributes);
  }

  public function remove($id)
  {
    $this->obj->delete($id);
  }
}
