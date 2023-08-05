<?php

namespace App\Controllers;

use App\Models\M_galery;

class Galery extends BaseController
{
    protected $M_galery;

    public function __construct()
    {
        $this->M_galery = new M_galery();
    }

    public function Halaman_galery()
    {
        $data = [
            'M_galery' => $this->M_galery->getgalery(),

        ];
        echo view('admin/galery/V_galery', $data);
    }
    public function Buat_galery()
    {
        echo view('admin/galery/V_Buat_galery');
    }

    public function Proses_galery()
    {
        // var_dump($this->request->getFile('gambar_1'));
        if (!$this->validate([
            'keterangan_galery' => [
                'label' => 'keterangan_galery',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
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
            $gamabarGalery1 = $gambar_1->getRandomName();
            $gamabarGalery2 = $gambar_2->getRandomName();
            $gamabarGalery3 = $gambar_3->getRandomName();
            $gambar_1->move('galery', $gamabarGalery1);
            $gambar_2->move('galery', $gamabarGalery2);
            $gambar_3->move('galery', $gamabarGalery3);

            $this->M_galery->save([
                'keterangan_galery' => $this->request->getVar('keterangan_galery'),
                'gambar_1' => $gamabarGalery1,
                'gambar_2' => $gamabarGalery2,
                'gambar_3' => $gamabarGalery3,
            ]);
            session()->setFlashdata('sukses', 'Data  Berhasil ditambahkan', 'info');
            return redirect()->to('/Halaman_galery');
        }
    }
    public function detail_galery($id_galery)
    {
        $data = [
            'detail' => $this->M_galery->getgalery($id_galery),
        ];

        return view('admin/galery/V_detail_galery', $data);
    }

    public function edit_galery($id_galery)
    {
        $data = [
            'edit_galery' => $this->M_galery->getgalery($id_galery),
        ];
        return view('admin/galery/V_edit_galery', $data);
    }

    public function Proses_edit_galery($id_galery)
    {
        if (!$this->validate([
            'keterangan_galery' => [
                'label' => 'keterangan_galery',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
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
                $filegambar_1->move('galery', $namagambar_1);
                unlink('galery/' . $this->request->getVar('gambar_1lama'));
            }

            // upload gambar baru 2
            if ($filegambar_2->getError() == 4) {
                $namagambar_2 = $this->request->getVar('gambar_2lama');
            } else {
                $namagambar_2 = $filegambar_2->getRandomName();
                $filegambar_2->move('galery', $namagambar_2);
                unlink('galery/' . $this->request->getVar('gambar_2lama'));
            }


            // upload gambar baru 3
            if ($filegambar_3->getError() == 4) {
                $namagambar_3 = $this->request->getVar('gambar_3lama');
            } else {
                $namagambar_3 = $filegambar_3->getRandomName();
                $filegambar_3->move('galery', $namagambar_3);
                unlink('galery/' . $this->request->getVar('gambar_3lama'));
            }

            $this->M_galery->update($id_galery, [
                'keterangan_galery' => $this->request->getVar('keterangan_galery'),
                'gambar_1' => $namagambar_1,
                'gambar_2' => $namagambar_2,
                'gambar_3' => $namagambar_3,
            ]);
            session()->getFlashdata('sukses', 'Data  Berhasil ditambahkan');
            return redirect()->to('/Halaman_galery');
        }
    }

    public function hapus_galery($id_galery)
    {
        $ambil_gambar = $this->M_galery->find($id_galery);
        unlink('galery/' . $ambil_gambar['gambar_1']);
        unlink('galery/' . $ambil_gambar['gambar_2']);
        unlink('galery/' . $ambil_gambar['gambar_3']);
        $this->M_galery->delete($id_galery);
        return redirect()->to('/Halaman_galery');
    }
}
