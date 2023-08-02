<?php

namespace App\Models;

use CodeIgniter\Model;

class M_galery extends Model
{
    protected $table      = 'galery';
    protected $primaryKey = 'id_galery';
    protected $allowedFields = ['keterangan_galery', 'gambar_1', 'gambar_2', 'gambar_3'];

    public function getgalery($id_galery = false)
    {
        if ($id_galery == false) {
            // return $this->findAll();
            return $this->orderBy('id_galery', 'desc')->findAll();
        }
        return $this->where(['id_galery' => $id_galery])->first();
    }
}
