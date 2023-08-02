<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Min  extends Model
{
    protected $table      = 'tat';
    protected $primaryKey = 'id_tat  ';
    protected $allowedFields = [
        'nama_lembaga',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'catatan',
        'tanggal',
        'jenis_layanan',
        'status',
    ];

    public function getinfo_Min()
    {
        $builder = $this->db->table('tat');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('tat');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_tat = false)
    {
        return $this->where(['id_tat   ' => $id_tat])->first();
    }
}
