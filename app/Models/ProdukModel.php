<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'tb_produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['id_kategori', 'id_perusahaan', 'nama_produk', 'foto_produk', 'harga_rupiah', 'harga_dolar', 'satuan', 'deskripsi_produk', 'created_at', 'updated_at'];
}
