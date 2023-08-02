<?php

namespace App\Controllers;

use App\Models\M_LMayarakat;

class Lpengaduan_masyarakat extends BaseController
{
    protected $M_LMasyarkat;

    public function __construct()
    {
        $this->M_LMasyarkat = new M_LMayarakat();
    }

    public function LInfo_masyarakat()
    {
        $data = [
            'M_LMasyarkat' => $this->M_LMasyarkat->orderBy('id_info_masyarakat', 'desc')->findAll(),
        ];
        echo view('admin/layanan/V_Linformasi_pengaduan', $data);
    }

    public function LInfo_pengaduan_konfirmasi($id_info_masyarakat)
    {
        $data = [
            'konforimasi_LI' => $this->M_LMasyarkat->getTampil_konfirmasi($id_info_masyarakat),
        ];

        // d($data);
        echo view('admin/layanan/V_Linformasi_pengaduan_konfirmasi', $data);
    }

    public function Proses_konfirmasi_LI_masyarakat($id_info_masyarakat)
    {
        if (!$this->validate([
            'subject' => [
                'label' => 'subject',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            'message' => [
                'label' => 'message',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $email_tujuan =  $this->request->getVar('email_tujuan');
        $subject =  $this->request->getVar('subject');
        $message =  $this->request->getVar('message');

        // set email
        $email =  service('email');
        $email->setTo($email_tujuan);
        $email->setFrom('rsbhayangkarasulbar@gmail.com', 'Admin Sulbar Bersinar');

        // set kirim
        $email->setSubject($subject);
        $email->setMessage($message);
        $this->M_LMasyarkat->update($id_info_masyarakat, [
            'status' => 'selesai',
        ]);
        // proses kirim
        if ($email->send()) {
            echo 'berhasil terkirim';
        } else {
            echo 'Gagal terkirim';
        }
    }
}
