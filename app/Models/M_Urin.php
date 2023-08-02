<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Urin extends Model
{
    protected $table      = 'urin';
    protected $primaryKey = 'id_urin';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'lokasi_kegiatan',
        'jml_tesurin',
        'gambar',
        'tanggal',
        'catatan',
        'jenis_layanan',
        'status'
    ];

    public function getinfo_Urin()
    {
        $builder = $this->db->table('urin');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('urin');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_urin  = false)
    {
        return $this->where(['id_urin ' => $id_urin])->first();
    }
}
