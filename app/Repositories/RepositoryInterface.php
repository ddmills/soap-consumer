<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function destroy($id);
}
