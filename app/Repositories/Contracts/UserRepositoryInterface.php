<?php
namespace App\Repositories\Contracts;

interface UserRepositoryInterface {
    public function all();
    public function find($id);
    public function create($id);
    public function update($id, $data);
    public function delete($id);
}