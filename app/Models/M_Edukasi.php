<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Edukasi  extends Model
{
    protected $table      = 'edukasi';
    protected $primaryKey = 'id_edukasi  ';
    protected $allowedFields = [
        'nama_lembaga',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'lokasi_kegiatan',
        'jumlah_narasumber',
        'gambar',
        'catatan',
        'tanggal',
        'jenis_layanan',
        'status',
    ];

    public function getinfo_edukasi()
    {
        $builder = $this->db->table('edukasi');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('edukasi');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_edukasi = false)
    {
        return $this->where(['id_edukasi   ' => $id_edukasi])->first();
    }
}
