<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface {

 protected $model;

 /**
  * Repository constructor.
  */
 public function __construct(Model $model) {
  $this->model = $model;
 }
 /**
  * Get all items.
  */
 public function all() {
  return $this->model->all();
 }
 /**
  * Create a model.
  */
 public function create(array $data) {
  return $this->model->create($data);
 }
 public function update(array $data, $id) {
  $record = $this->model->find($id);
  return $record->update($data);
 }
 public function delete($id) {
  return $this->model->destroy($id);
 }
 public function show($id) {
  return $this->model->findOrFail($id);
 }
}