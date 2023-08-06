<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Betah  extends Model
{
    protected $table      = 'betah';
    protected $primaryKey = 'id_betah ';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'nama_tahanan',
        'catatan',
        'tanggal',
        'gambar',
        'jenis_layanan',
        'status',
    ];

    public function getinfo_betah()
    {
        $builder = $this->db->table('betah');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('betah');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_betah   = false)
    {
        return $this->where(['id_betah  ' => $id_betah])->first();
    }
    public function cetak($tglawal, $tglakhir)
    {
        return $this->table('betah')->where('tanggal >=', $tglawal)->where('tanggal <=', $tglakhir)->where('status', 'selesai')->get();
    }
}
