<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = ['judul_berita', 'keterangan_berita', 'tangal_berita', 'gambar_1', 'gambar_2', 'gambar_3'];

    public function getBerita($id_berita = false)
    {
        if ($id_berita == false) {
            // return $this->findAll();
            return $this->orderBy('id_berita', 'desc')->findAll();
        }
        return $this->where(['id_berita' => $id_berita])->first();
    }
}
