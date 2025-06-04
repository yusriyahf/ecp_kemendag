<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'tb_produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['id_kategori', 'id_perusahaan', 'nama_produk', 'foto_produk', 'harga_rupiah', 'harga_dolar', 'satuan', 'deskripsi_produk', 'created_at', 'updated_at'];

    private function baseProductQuery()
    {
        return $this->select('tb_produk.*, tb_kategori.slug_kategori, tb_kategori.nama_kategori, tb_perusahaan.*')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori')
            ->join('tb_perusahaan', 'tb_perusahaan.id_perusahaan = tb_produk.id_perusahaan');
    }

    public function getAllproduct()
    {
        return $this->baseProductQuery()->findAll();
    }


    public function getProductsByCategorySlug(string $slugKategori)
    {
        return $this->baseProductQuery()
            ->where('tb_kategori.slug_kategori', $slugKategori)
            ->findAll();
    }

    public function getProductBySlugAndCategory(string $slugKategori, string $slugProduk)
    {
        return $this->baseProductQuery()
            ->where('tb_kategori.slug_kategori', $slugKategori)
            ->where('tb_produk.slug_produk', $slugProduk)
            ->first();
    }

    public function getRelatedProducts($idPerusahaan, $idProduk, $limit = 4)
    {
        return $this->baseProductQuery()
            ->where('tb_produk.id_perusahaan', $idPerusahaan)
            ->where('tb_produk.id_produk !=', $idProduk) // agar tidak termasuk produk yang sedang dibuka
            ->limit($limit)
            ->find();
    }
}
