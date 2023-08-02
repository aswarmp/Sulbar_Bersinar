<?php

namespace App\Controllers;

use App\Models\M_LMayarakat;
use App\Models\M_Assesment;
use App\Models\M_Edukasi;
use App\Models\M_Konsul_dokter;
use App\Models\M_Betah;
use App\Models\M_Min;
use App\Models\M_Pemeriksaan_kesehatan;
use App\Models\M_Pemeriksaan_Narkoba;
use App\Models\M_Urin;

class Admin extends BaseController
{
    protected $M_LMasyarkat;
    protected $M_Assesment;
    protected $M_Edukasi;
    protected $M_Konsul_dokter;
    protected $M_Betah;
    protected $M_Min;
    protected $M_Pemeriksaan_kesehatan;
    protected $M_Pemeriksaan_Narkoba;
    protected $M_Urin;

    public function __construct()
    {
        $this->M_LMasyarkat = new M_LMayarakat();
        $this->M_Assesment = new M_Assesment();
        $this->M_Edukasi = new M_Edukasi();
        $this->M_Konsul_dokter = new M_Konsul_dokter();
        $this->M_Betah = new M_Betah();
        $this->M_Min = new M_Min();
        $this->M_Pemeriksaan_kesehatan = new M_Pemeriksaan_kesehatan();
        $this->M_Pemeriksaan_Narkoba = new M_Pemeriksaan_Narkoba();
        $this->M_Urin = new M_Urin();
    }
    public function dashboard()
    {
        $data = [
            'M_LMasyarkat' => $this->M_LMasyarkat->getinfo_masyarakat(),
            'M_Assesment' => $this->M_Assesment->getinfo_Assesment(),
            'M_Edukasi' => $this->M_Edukasi->getinfo_edukasi(),
            'M_Konsul_dokter' => $this->M_Konsul_dokter->getinfo_konsul(),
            'M_Betah' => $this->M_Betah->getinfo_betah(),
            'M_Min' => $this->M_Min->getinfo_Min(),
            'M_Pemeriksaan_kesehatan' => $this->M_Pemeriksaan_kesehatan->getinfo_Pemeriksaan_kesehatan(),
            'M_Pemeriksaan_Narkoba' => $this->M_Pemeriksaan_Narkoba->getinfo_Pemeriksaan_Narkoba(),
            'M_Urin' => $this->M_Urin->getinfo_Urin(),

        ];
        echo view('admin/index', $data);
    }
}
