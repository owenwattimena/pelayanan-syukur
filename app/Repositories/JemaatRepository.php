<?php

namespace App\Repositories;
use App\Models\Jemaat;
use Illuminate\Database\Eloquent\Collection;

interface JemaatRepository
{
    public function all(): Collection|null;
    public function create(array $data) : Jemaat|null;
    public function update(array $data, int $id) : bool;
    public function delete(array|int $ids) : bool;

}