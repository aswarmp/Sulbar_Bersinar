<?php

namespace App\Controllers;

use App\Models\M_galery;
use App\Models\M_berita;

class Landingpage extends BaseController
{
    protected $M_galery;
    protected $M_berita;

    public function __construct()
    {
        $this->M_galery = new M_galery();
        $this->M_berita = new M_berita();
    }

    public function index()
    {
        echo view('Landingpage/Header');
        echo view('Landingpage/home');
        echo view('Landingpage/Footer');
    }
    public function Contact()
    {

        echo view('Landingpage/Header');
        echo view('Landingpage/V_contact');
        echo view('Landingpage/Footer');
    }
    public function Galery()
    {
        $data = [
            'T_Galery' => $this->M_galery->getgalery(),

        ];
        echo view('Landingpage/Header');
        echo view('Landingpage/V_galery', $data);
        echo view('Landingpage/Footer');
    }
    public function DetailGallery($id_galery)
    {
        $data = [
            'detail' => $this->M_galery->getgalery($id_galery),
        ];
        echo view('Landingpage/Header');
        echo view('Landingpage/V_detailgaleri', $data);
        echo view('Landingpage/Footer');
    }
    public function Berita()
    {
        $data = [
            'berita' => $this->M_berita->getBerita(),
        ];
        echo view('Landingpage/Header');
        echo view('Landingpage/V_berita', $data);
        echo view('Landingpage/Footer');
    }

    public function DetailBerita($id_berita)
    {
        $data = [
            'detail' => $this->M_berita->getBerita($id_berita),
        ];
        echo view('Landingpage/Header');
        echo view('Landingpage/V_detailberita', $data);
        echo view('Landingpage/Footer');
    }
}
