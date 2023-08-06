<?php

namespace App\Controllers;

use App\Models\M_Pemeriksaan_Narkoba;
use Dompdf\Dompdf;

class Pemeriksaan_Narkoba extends BaseController
{
    protected $M_Pemeriksaan_Narkoba;

    public function __construct()
    {
        $this->M_Pemeriksaan_Narkoba = new M_Pemeriksaan_Narkoba();
    }

    public function Pemeriksaan_Narkoba()
    {
        echo view('Landingpage/Pemeriksaan_narkoba/V_pemeriksaannarkoba');
    }
    public function Proses_Pemeriksaan_Narkoba()
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
            'kelurahan' => [
                'label' => 'kelurahan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'kecamatan' => [
                'label' => 'kecamatan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'kabupaten' => [
                'label' => 'kabupaten',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'provinsi' => [
                'label' => 'provinsi',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'alamat' => [
                'label' => 'alamat',
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
            'gambar' => [
                'label' => 'gambar',
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|mime_in[gambar,image/jpeg,image/jpg]|is_image[gambar]',
                'errors' => [
                    'uploaded' => '{field} Harus diisi',
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'mime_in' => '{field} Extensi file jpeg,jpg',
                    'is_image' => '{field} harus gambar',
                ]
            ],
            'skhpn' => [
                'label' => 'skhpn',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'pekerjaan' => [
                'label' => 'pekerjaan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $gambar = $this->request->getFile('gambar');
            $gamabarkonsul1 = $gambar->getRandomName();
            $gambar->move('layanan_img', $gamabarkonsul1);

            $this->M_Pemeriksaan_Narkoba->save([
                'nama' => $this->request->getVar('nama'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
                'kelurahan' => $this->request->getVar('kelurahan'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kabupaten' => $this->request->getVar('kabupaten'),
                'provinsi' => $this->request->getVar('provinsi'),
                'alamat' => $this->request->getVar('alamat'),
                'pekerjaan' => $this->request->getVar('pekerjaan'),
                'skhpn' => $this->request->getVar('skhpn'),
                'tanggal' => $this->request->getVar('tanggal'),
                'gambar' => $gamabarkonsul1,
                'jenis_layanan' => $this->request->getVar('jenis_layanan'),
                'status' => $this->request->getVar('status'),
            ]);
            session()->setFlashdata('sukses', 'Konfirmasi Akan Dikirim Melalui Email Anda');
            return redirect()->to('/');
        }
    }

    public function Proses_approve_Pemeriksaan_Narkoba($id_pemeriksaan)
    {
        // $this->M_Pemeriksaan_Narkoba->find($id_pemeriksaan);
        // d($id_info_masyarakat);
        $this->M_Pemeriksaan_Narkoba->update($id_pemeriksaan, [
            'status' => 'konfirmasi',
        ]);
        return redirect()->to('/dashboard');
    }

    public function tampil_suket_narkoba()
    {
        $data = [
            'suket' => $this->M_Pemeriksaan_Narkoba->orderBy('id_pemeriksaan', 'DESC')->findAll(),
        ];
        echo view('admin/layanan/V_suket_pemeriksaan_narkoba', $data);
    }
    public function proses_konfirmasi_suket_narkoba($id_pemeriksaan)
    {
        $data = [
            'konfir_suket_narkoba' => $this->M_Pemeriksaan_Narkoba->getTampil_konfirmasi($id_pemeriksaan),
        ];
        echo view('admin/layanan/konfir/V_konfir_suket_narkoba', $data);
    }
    public function Proses_kirim_suket($id_pemeriksaan)
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
            'gambar' => [
                'label' => 'gambar',
                'rules' => 'max_size[gambar,1024]|ext_in[gambar,pdf,jpg,jpeg]',
                'errors' => [
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'ext_in' => '{field} Extensi file jpeg,jpg,pdf',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $email_tujuan =  $this->request->getVar('email_tujuan');
        $subject =  $this->request->getVar('subject');
        $message =  $this->request->getVar('message');
        $gambar =  $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $fileName = $gambar->getName();
            $filePath = 'layanan/default.jpg';
        } else {
            $fileName = $gambar->getName();
            $gambar->move('layanan', $fileName);
            $filePath = 'layanan/' . $fileName;
        }

        // set email
        $email =  service('email');
        $email->setTo($email_tujuan);
        $email->setFrom('rsbhayangkarasulbar@gmail.com', 'Admin Sulbar Bersinar');

        // set kirim
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->attach($filePath, 'attachment', $fileName);
        $this->M_Pemeriksaan_Narkoba->update($id_pemeriksaan, [
            'status' => 'selesai',
        ]);
        // proses kirim
        if ($email->send()) {
            echo 'berhasil terkirim';
        } else {
            echo 'Gagal terkirim';
        }
    }
    public function proses_cetak_SuketNarkoba()
    {
        $tglawal = $this->request->getVar('tglawal');
        $tglakhir = $this->request->getVar('tglakhir');
        $datacetak = $this->M_Pemeriksaan_Narkoba->cetak($tglawal, $tglakhir);
        $data = [
            'datacetak' => $datacetak,
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir,
        ];
        $view = view('admin/cetak_layanan/V_narkoba', $data);
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
