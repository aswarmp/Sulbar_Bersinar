<?php

namespace App\Controllers;

use App\Models\M_LMayarakat;
use Dompdf\Dompdf;

class Lapinmas extends BaseController
{
    protected $M_LMasyarkat;

    public function __construct()
    {
        $this->M_LMasyarkat = new M_LMayarakat();
    }

    public function layana_pangaduan()
    {
        echo view('Landingpage/Lapinmas/V_lapinmas');
    }
    public function Proses_pengaduan_masyarakat()
    {
        if (!$this->validate([
            'nama' => [
                'label' => 'nama',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            'email' => [
                'label' => 'email',
                'rules' => 'required|min_length[5]|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                    'valid_email' => '{field} periksa kembali email anda'
                ]
            ],
            'no_telp' => [
                'label' => 'no_telp',
                'rules' => 'required|min_length[5]|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                    'numeric' => '{field} Harus Angkat',
                ]
            ],
            'catatan' => [
                'label' => 'catatan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'lokasi_laporan' => [
                'label' => 'lokasi_laporan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'tanggal' => [
                'label' => 'tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {

            $this->M_LMasyarkat->save([
                'nama' => $this->request->getVar('nama'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
                'catatan' => $this->request->getVar('catatan'),
                'lokasi_laporan' => $this->request->getVar('lokasi_laporan'),
                'jenis_layanan' => $this->request->getVar('jenis_layanan'),
                'tanggal' => $this->request->getVar('tanggal'),
                'status' => $this->request->getVar('status'),
            ]);
            session()->setFlashdata('sukses', 'Konfirmasi Akan Dikirim Melalui Email Anda');
            return redirect()->to('/');
        }
    }

    public function Proses_approve($id_info_masyarakat)
    {
        $this->M_LMasyarkat->find($id_info_masyarakat);
        $this->M_LMasyarkat->update($id_info_masyarakat, [
            'status' => 'konfirmasi',
        ]);
        return redirect()->to('/dashboard');
    }
    public function proses_cetak_informasi()
    {
        $tglawal = $this->request->getVar('tglawal');
        $tglakhir = $this->request->getVar('tglakhir');
        $datacetak = $this->M_LMasyarkat->cetak($tglawal, $tglakhir);
        $data = [
            'datacetak' => $datacetak,
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir,
        ];
        $view = view('admin/cetak_layanan/V_informasi', $data);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Laporan Pendaftaran', array("Attachment" => false));
    }
}
