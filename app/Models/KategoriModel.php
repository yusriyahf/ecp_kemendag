<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['nama_kategori', 'created_at', 'updated_at'];

    public function getBySlug(string $slugKategori)
    {
        return $this->where('slug_kategori', $slugKategori)->first();
    }
}
