<?php

namespace App\Models;

use CodeIgniter\Model;

class M_LMayarakat extends Model
{
    protected $table      = 'informasi_masyarakat';
    protected $primaryKey = 'id_info_masyarakat	';
    protected $allowedFields = [
        'nama',
        'email',
        'no_telp',
        'catatan',
        'lokasi_laporan',
        'jenis_layanan',
        'tanggal',
        'status'
    ];

    public function getinfo_masyarakat()
    {
        $builder = $this->db->table('informasi_masyarakat');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }
    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('informasi_masyarakat');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_info_masyarakat = false)
    {
        return $this->where(['id_info_masyarakat' => $id_info_masyarakat])->first();
    }

    public function cetak($tglawal, $tglakhir)
    {
        return $this->table('informasi_masyarakat')->where('tanggal >=', $tglawal)->where('tanggal <=', $tglakhir)->where('status', 'selesai')->get();
    }
}
