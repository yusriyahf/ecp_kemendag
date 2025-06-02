<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaKabModel extends Model
{
    protected $table = 'tb_kota_kab';
    protected $primaryKey = 'id_kota_kab';
    protected $allowedFields = ['nama_kota_kab', 'slug_kota_kab', 'created_at', 'updated_at'];
}
