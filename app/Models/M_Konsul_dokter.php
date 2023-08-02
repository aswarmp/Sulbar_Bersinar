<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Konsul_dokter extends Model
{
    protected $table      = 'konsul_dokter';
    protected $primaryKey = 'id_konsul_dokter 	';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'jenis_layanan',
        'tanggal',
        'gambar',
        'status'
    ];

    public function getinfo_konsul()
    {
        $builder = $this->db->table('konsul_dokter');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('konsul_dokter');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_konsul_dokter = false)
    {
        return $this->where(['id_konsul_dokter' => $id_konsul_dokter])->first();
    }
}
