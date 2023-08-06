<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Assesment extends Model
{
    protected $table      = 'assesment';
    protected $primaryKey = 'id_assesment  	';
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
        'status',
        'catatan'
    ];

    public function getinfo_Assesment()
    {
        $builder = $this->db->table('assesment');
        $query = $builder->getWhere(['status' => 'approve']);
        return $query;
    }

    public function getinfo_konfirmasi()
    {
        $builder = $this->db->table('assesment');
        $query = $builder->getWhere(['status' => 'konfirmasi']);
        return $query;
    }

    public function getTampil_konfirmasi($id_assesment = false)
    {
        return $this->where(['id_assesment' => $id_assesment])->first();
    }
    public function cetak($tglawal, $tglakhir)
    {
        return $this->table('assesment')->where('tanggal >=', $tglawal)->where('tanggal <=', $tglakhir)->where('status', 'selesai')->get();
    }
}
