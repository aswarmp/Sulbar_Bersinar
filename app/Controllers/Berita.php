<?php

namespace App\Controllers;

use App\Models\M_berita;

class Berita extends BaseController
{
    protected $M_berita;

    public function __construct()
    {
        $this->M_berita = new M_berita();
    }

    public function Halaman_berita()
    {
        $data = [
            'M_berita' => $this->M_berita->getBerita(),

        ];
        echo view('admin/berita/V_berita', $data);
    }

    public function Buat_berita()
    {

        $data = [
            'title' => 'Tambah Data Berita',
        ];
        echo view('admin/berita/V_Buat_berita', $data);
    }

    public function Proses_berita()
    {
        // var_dump($this->request->getFile('gambar_1'));
        if (!$this->validate([
            'judul_berita' => [
                'label' => 'judul_berita',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            'keterangan_berita' => [
                'label' => 'keterangan_berita',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            'tangal_berita' => [
                'label' => 'tangal_berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'gambar_1' => [
                'label' => 'gambar_1',
                'rules' => 'uploaded[gambar_1]|max_size[gambar_1,1024]|mime_in[gambar_1,image/jpeg,image/jpg]|is_image[gambar_1]',
                'errors' => [
                    'uploaded' => '{field} Harus diisi',
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'mime_in' => '{field} Extensi file jpeg,jpg',
                    'is_image' => '{field} harus gambar',
                ]
            ],
            'gambar_2' => [
                'label' => 'gambar_2',
                'rules' => 'uploaded[gambar_2]|max_size[gambar_2,1024]|mime_in[gambar_1,image/jpeg,image/jpg]|is_image[gambar_2]',
                'errors' => [
                    'uploaded' => '{field} Harus diisi',
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'mime_in' => '{field} Extensi file jpeg,jpg',
                    'is_image' => '{field} harus gambar',
                ]
            ],
            'gambar_3' => [
                'label' => 'gambar_3',
                'rules' => 'uploaded[gambar_3]|max_size[gambar_3,1024]|mime_in[gambar_1,image/jpeg,image/jpg]|is_image[gambar_3]',
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
            $gambar_1 = $this->request->getFile('gambar_1');
            $gambar_2 = $this->request->getFile('gambar_2');
            $gambar_3 = $this->request->getFile('gambar_3');
            $gamabarBerita1 = $gambar_1->getRandomName();
            $gamabarBerita2 = $gambar_2->getRandomName();
            $gamabarBerita3 = $gambar_3->getRandomName();
            $gambar_1->move('berita', $gamabarBerita1);
            $gambar_2->move('berita', $gamabarBerita2);
            $gambar_3->move('berita', $gamabarBerita3);

            $this->M_berita->save([
                'judul_berita' => $this->request->getVar('judul_berita'),
                'keterangan_berita' => $this->request->getVar('keterangan_berita'),
                'tangal_berita' => $this->request->getVar('tangal_berita'),
                'gambar_1' => $gamabarBerita1,
                'gambar_2' => $gamabarBerita2,
                'gambar_3' => $gamabarBerita3,
            ]);
            session()->getFlashdata('sukses', 'Data  Berhasil ditambahkan');
            return redirect()->to('Halaman_berita');
        }
    }

    public function detail_berita($id_berita)
    {
        $data = [
            'detail' => $this->M_berita->getBerita($id_berita),
        ];

        return view('admin/berita/V_detail_berita', $data);
    }

    public function edit_berita($id_berita)
    {
        $data = [
            'edit_berita' => $this->M_berita->getBerita($id_berita),
        ];
        return view('admin/berita/V_edit_berita', $data);
    }

    public function Proses_edit_berita($id_berita)
    {
        if (!$this->validate([
            'judul_berita' => [
                'label' => 'judul_berita',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            'keterangan_berita' => [
                'label' => 'keterangan_berita',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            'tangal_berita' => [
                'label' => 'tangal_berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'gambar_1' => [
                'label' => 'gambar_1',
                'rules' => 'max_size[gambar_1,1024]|mime_in[gambar_1,image/jpeg,image/jpg]|is_image[gambar_1]',
                'errors' => [
                    'uploaded' => '{field} Harus diisi',
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'mime_in' => '{field} Extensi file jpeg,jpg',
                    'is_image' => '{field} harus gambar',
                ]
            ],
            'gambar_2' => [
                'label' => 'gambar_2',
                'rules' => 'max_size[gambar_2,1024]|mime_in[gambar_1,image/jpeg,image/jpg]|is_image[gambar_2]',
                'errors' => [
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'mime_in' => '{field} Extensi file jpeg,jpg',
                    'is_image' => '{field} harus gambar',
                ]
            ],
            'gambar_3' => [
                'label' => 'gambar_3',
                'rules' => 'max_size[gambar_3,1024]|mime_in[gambar_1,image/jpeg,image/jpg]|is_image[gambar_3]',
                'errors' => [
                    'max_size' => '{field} Ukuran File terlalu besar 1 mb max file',
                    'mime_in' => '{field} Extensi file jpeg,jpg',
                    'is_image' => '{field} harus gambar',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $filegambar_1 = $this->request->getFile('gambar_1');
            $filegambar_2 = $this->request->getFile('gambar_2');
            $filegambar_3 = $this->request->getFile('gambar_3');

            // upload gambar baru 1
            if ($filegambar_1->getError() == 4) {
                $namagambar_1 = $this->request->getVar('gambar_1lama');
            } else {
                $namagambar_1 = $filegambar_1->getRandomName();
                $filegambar_1->move('berita', $namagambar_1);
                unlink('berita/' . $this->request->getVar('gambar_1lama'));
            }

            // upload gambar baru 2
            if ($filegambar_2->getError() == 4) {
                $namagambar_2 = $this->request->getVar('gambar_2lama');
            } else {
                $namagambar_2 = $filegambar_2->getRandomName();
                $filegambar_2->move('berita', $namagambar_2);
                unlink('berita/' . $this->request->getVar('gambar_2lama'));
            }


            // upload gambar baru 3
            if ($filegambar_3->getError() == 4) {
                $namagambar_3 = $this->request->getVar('gambar_3lama');
            } else {
                $namagambar_3 = $filegambar_3->getRandomName();
                $filegambar_3->move('berita', $namagambar_3);
                unlink('berita/' . $this->request->getVar('gambar_3lama'));
            }

            $this->M_berita->update($id_berita, [
                'judul_berita' => $this->request->getVar('judul_berita'),
                'keterangan_berita' => $this->request->getVar('keterangan_berita'),
                'tangal_berita' => $this->request->getVar('tangal_berita'),
                'gambar_1' => $namagambar_1,
                'gambar_2' => $namagambar_2,
                'gambar_3' => $namagambar_3,
            ]);
            session()->getFlashdata('sukses', 'Data  Berhasil ditambahkan');
            return redirect()->to('/Halaman_berita');
        }
    }

    public function hapus_berita($id_berita)
    {
        $ambil_gambar = $this->M_berita->find($id_berita);
        unlink('berita/' . $ambil_gambar['gambar_1']);
        unlink('berita/' . $ambil_gambar['gambar_2']);
        unlink('berita/' . $ambil_gambar['gambar_3']);
        $this->M_berita->delete($id_berita);
        return redirect()->to('/Halaman_berita');
    }
}
