<?php

namespace App\Controllers;

use App\Models\M_Pemeriksaan_kesehatan;
use Dompdf\Dompdf;

class Pemeriksaan_Kesehatan extends BaseController
{
    protected $M_Pemeriksaan_kesehatan;

    public function __construct()
    {
        $this->M_Pemeriksaan_kesehatan = new M_Pemeriksaan_kesehatan();
    }

    public function add_pemeriksaan_kesehatan()
    {
        echo view('Landingpage/Pemeriksaan_kesehatan/V_pemeriksaankesehatan');
    }
    public function Proses_pemeriksaan_kesehatan()
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

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $gambar = $this->request->getFile('gambar');
            $gamabarkonsul1 = $gambar->getRandomName();
            $gambar->move('layanan_img', $gamabarkonsul1);

            $this->M_Pemeriksaan_kesehatan->save([
                'nama' => $this->request->getVar('nama'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
                'kelurahan' => $this->request->getVar('kelurahan'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kabupaten' => $this->request->getVar('kabupaten'),
                'provinsi' => $this->request->getVar('provinsi'),
                'alamat' => $this->request->getVar('alamat'),
                'tanggal' => $this->request->getVar('tanggal'),
                'gambar' => $gamabarkonsul1,
                'jenis_layanan' => $this->request->getVar('jenis_layanan'),
                'status' => $this->request->getVar('status'),

            ]);
            session()->setFlashdata('sukses', 'Konfirmasi Akan Dikirim Melalui Email Anda');
            return redirect()->to('/');
        }
    }

    public function Proses_approve_Pemeriksaan_kesehatan($id_pemeriksaan_kesehatan)
    {
        // $this->M_Pemeriksaan_kesehatan->find($id_pemeriksaan_kesehatan);
        // d($id_info_masyarakat);
        $this->M_Pemeriksaan_kesehatan->update($id_pemeriksaan_kesehatan, [
            'status' => 'konfirmasi',
        ]);
        return redirect()->to('/dashboard');
    }
    public function tampil_pemeriksaan_kesehatan()
    {
        $data = [
            'suket' => $this->M_Pemeriksaan_kesehatan->orderBy('id_pemeriksaan_kesehatan', 'desc')->findAll(),
        ];
        echo view('admin/layanan/V_suket_pemeriksaan_kesehatan', $data);
    }
    public function konfirmasi_email_kesehatan($id_pemeriksaan_kesehatan)
    {
        $data = [
            'konfir_suket_kesehatan' => $this->M_Pemeriksaan_kesehatan->getTampil_konfirmasi($id_pemeriksaan_kesehatan),
        ];
        echo view('admin/layanan/konfir/V_konfir_suket_kesehatan', $data);
    }

    public function Proses_konfirmasi_suket_kesehatan($id_pemeriksaan_kesehatan)
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
        $this->M_Pemeriksaan_kesehatan->update($id_pemeriksaan_kesehatan, [
            'status' => 'selesai',
        ]);
        // proses kirim
        if ($email->send()) {
            echo 'berhasil terkirim';
        } else {
            echo 'Gagal terkirim';
        }
    }


    public function proses_cetak_SuketKesehatan()
    {
        $tglawal = $this->request->getVar('tglawal');
        $tglakhir = $this->request->getVar('tglakhir');
        $datacetak = $this->M_Pemeriksaan_kesehatan->cetak($tglawal, $tglakhir);
        $data = [
            'datacetak' => $datacetak,
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir,
        ];
        $view = view('admin/cetak_layanan/V_kesehatan', $data);
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
