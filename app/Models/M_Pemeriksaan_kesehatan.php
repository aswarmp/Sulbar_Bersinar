<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pemeriksaan_kesehatan  extends Model
{
    protected $table      = 'pemeriksaan_kesehatan';
    protected $primaryKey = 'id_pemeriksaan_kesehatan';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'tanggal',
        'gambar',
        'jenis_layanan',
        'status',
    ];

    public function getinfo_Pemeriksaan_kesehatan()
    {
        $builder = $this->db->table('pemeriksaan_kesehatan');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('pemeriksaan_kesehatan');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_pemeriksaan_kesehatan  = false)
    {
        return $this->where(['id_pemeriksaan_kesehatan ' => $id_pemeriksaan_kesehatan])->first();
    }
    public function cetak($tglawal, $tglakhir)
    {
        return $this->table('pemeriksaan_kesehatan')->where('tanggal >=', $tglawal)->where('tanggal <=', $tglakhir)->where('status', 'selesai')->get();
    }
}
