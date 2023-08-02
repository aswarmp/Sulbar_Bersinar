<?php

namespace App\Controllers;

use App\Models\M_Urin;

class Urin extends BaseController
{
    protected $M_Urin;

    public function __construct()
    {
        $this->M_Urin = new M_Urin();
    }

    public function Add_TesUrine()
    {
        echo view('Landingpage/Urin/V_tesurine');
    }
    public function Proses_TesUrine()
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
            'lokasi_kegiatan' => [
                'label' => 'lokasi_kegiatan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'jml_tesurin' => [
                'label' => 'jml_tesurin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
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
            'catatan' => [
                'label' => 'catatan',
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

            $this->M_Urin->save([
                'nama' => $this->request->getVar('nama'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
                'kelurahan' => $this->request->getVar('kelurahan'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kabupaten' => $this->request->getVar('kabupaten'),
                'provinsi' => $this->request->getVar('provinsi'),
                'alamat' => $this->request->getVar('alamat'),
                'lokasi_kegiatan' => $this->request->getVar('lokasi_kegiatan'),
                'jml_tesurin' => $this->request->getVar('jml_tesurin'),
                'tanggal' => $this->request->getVar('tanggal'),
                'gambar' => $gamabarkonsul1,
                'catatan' => $this->request->getVar('catatan'),
                'jenis_layanan' => $this->request->getVar('jenis_layanan'),
                'status' => $this->request->getVar('status'),
            ]);
            // session()->getFlashdata('sukses', 'Data  Berhasil ditambahkan');
            return redirect()->to('/');
        }
    }

    public function Proses_approve_urin($id_Urin)
    {
        // $this->M_Urin->find($id_Urin);
        // d($id_info_masyarakat);
        $this->M_Urin->update($id_Urin, [
            'status' => 'konfirmasi',
        ]);
        return redirect()->to('/dashboard');
    }

    public function tampil_tes_urin()
    {
        $data = [
            'urin' => $this->M_Urin->orderBy('id_Urin', 'desc')->findAll(),
        ];
        echo view('admin/layanan/V_Urin', $data);
    }
    public function konfirmasi_Urin($id_Urin)
    {
        $data = [
            'konfir_urin' => $this->M_Urin->getTampil_konfirmasi($id_Urin),
        ];
        echo view('admin/layanan/konfir/V_urin', $data);
    }
    public function Proses_konfirmasi_Urin($id_Urin)
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
        $this->M_Urin->update($id_Urin, [
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
