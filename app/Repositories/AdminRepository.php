<?php
namespace App\Repositories;
use App\Models\Admin;

interface AdminRepository {
    public function daftar(array $data) : Admin|null;

    public function ubah(array $data, int $id) : bool;
    public function hapus(int $id) : bool;
}
