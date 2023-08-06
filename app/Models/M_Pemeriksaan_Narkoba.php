<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pemeriksaan_Narkoba extends Model
{
    protected $table      = 'pemeriksaan_narkoba';
    protected $primaryKey = 'id_pemeriksaan   	';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'pekerjaan',
        'skhpn',
        'jenis_layanan',
        'tanggal',
        'gambar',
        'status',
    ];

    public function getinfo_Pemeriksaan_Narkoba()
    {
        $builder = $this->db->table('pemeriksaan_narkoba');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('pemeriksaan_narkoba');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_pemeriksaan  = false)
    {
        return $this->where(['id_pemeriksaan ' => $id_pemeriksaan])->first();
    }
    public function cetak($tglawal, $tglakhir)
    {
        return $this->table('pemeriksaan_narkoba')->where('tanggal >=', $tglawal)->where('tanggal <=', $tglakhir)->where('status', 'selesai')->get();
    }
}
