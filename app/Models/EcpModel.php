<?php

namespace App\Models;

use CodeIgniter\Model;

class EcpModel extends Model
{
    protected $table = 'tb_ecp';
    protected $primaryKey = 'id_ecp';
    protected $allowedFields = ['nama_ecp', 'mitra_ecp', 'tahun_ecp', 'daerah_ecp', 'created_at', 'updated_at'];
}
