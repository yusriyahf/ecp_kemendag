<?php

namespace App\Models;

use CodeIgniter\Model;

class PerusahaanModel extends Model
{
    protected $table = 'tb_perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $allowedFields = ['id_user', 'id_ecp', 'id_kota_kab', 'nama_perusahaan', 'email_pemesanan', 'wa_pemesanan', 'website_perusahaan', 'deskripsi_perusahaan', 'created_at', 'updated_at'];
}
