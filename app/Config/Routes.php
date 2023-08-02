<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Landingpage');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// user
$routes->get('/', 'Landingpage::index');
$routes->get('User_contact', 'Landingpage::contact');
$routes->get('User_galery', 'Landingpage::galery');
$routes->get('User_berita', 'Landingpage::berita');
$routes->get('/Detail_gallery/(:segment)', 'Landingpage::DetailGallery/$1');
$routes->get('/Detail_berita/(:segment)', 'Landingpage::DetailBerita/$1');

// login
$routes->get('Login', 'Auth::Login');

// admin
$routes->get('dashboard', 'Admin::dashboard', ['Filter' => 'role:admin']);
$routes->get('/Admin/index', 'Admin::index', ['Filter' => 'role:admin']);

// Berita admin
$routes->get('Halaman_berita', 'Berita::Halaman_berita', ['Filter' => 'role:admin']);
$routes->get('Buat_berita', 'Berita::Buat_berita', ['Filter' => 'role:admin']);
$routes->post('Proses_berita', 'Berita::Proses_berita', ['Filter' => 'role:admin']);
$routes->get('/detail_berita/(:segment)', 'Berita::detail_berita/$1', ['Filter' => 'role:admin']);
$routes->get('/edit_berita/(:segment)', 'Berita::edit_berita/$1', ['Filter' => 'role:admin']);
$routes->post('/Proses_edit_berita/(:segment)', 'Berita::Proses_edit_berita/$1', ['Filter' => 'role:admin']);
$routes->get('/hapus_berita/(:segment)', 'Berita::hapus_berita/$1', ['Filter' => 'role:admin']);

// Galery admin
$routes->get('Halaman_galery', 'Galery::Halaman_galery', ['Filter' => 'role:admin']);
$routes->get('Buat_galery', 'Galery::Buat_galery', ['Filter' => 'role:admin']);
$routes->post('Proses_galery', 'Galery::Proses_galery', ['Filter' => 'role:admin']);
$routes->get('/detail_galery/(:segment)', 'Galery::detail_galery/$1', ['Filter' => 'role:admin']);
$routes->get('/edit_galery/(:segment)', 'Galery::edit_galery/$1', ['Filter' => 'role:admin']);
$routes->post('/Proses_edit_galery/(:segment)', 'Galery::Proses_edit_galery/$1', ['Filter' => 'role:admin']);
$routes->get('/hapus_galery/(:segment)', 'Galery::hapus_galery/$1', ['Filter' => 'role:admin']);

// admin layanan
$routes->get('LInfo_masyarakat', 'Lpengaduan_masyarakat::LInfo_masyarakat', ['Filter' => 'role:admin']);
$routes->get('/LInfo_pengaduan_konfirmasi/(:segment)', 'Lpengaduan_masyarakat::LInfo_pengaduan_konfirmasi/$1', ['Filter' => 'role:admin']);
$routes->post('/Proses_konfirmasi_LI_masyarakat/(:segment)', 'Lpengaduan_masyarakat::Proses_konfirmasi_LI_masyarakat/$1', ['Filter' => 'role:admin']);

// Layanan Pengaduan Masyarakat
$routes->get('layana_pangaduan', 'Lapinmas::layana_pangaduan');
$routes->post('Proses_pengaduan_masyarakat', 'Lapinmas::Proses_pengaduan_masyarakat');
$routes->get('/Proses_approve/(:segment)', 'Lapinmas::Proses_approve/$1');

// Layanan Konsul dokter 
$routes->get('Konsul_Dokter', 'Konsul_dokter::KonsultasiDokter');
$routes->post('Proses_Konsul_Dokter', 'Konsul_dokter::Proses_Konsul_Dokter');
$routes->get('/Proses_approve_Konsul/(:segment)', 'Konsul_dokter::Proses_approve_Konsul/$1');
$routes->get('tampil_Konsul_dokter', 'Konsul_dokter::tampil_Konsul_dokter');
$routes->get('/konfir_konsul/(:segment)', 'Konsul_dokter::konfir_konsul/$1');
$routes->post('/Proses_konfirmasi_konsul_dokter/(:segment)', 'Konsul_dokter::Proses_konfirmasi_konsul_dokter/$1');

// Asessment 
$routes->get('/Asessment', 'Asessment::Asessment');
$routes->post('/Proses_assesment', 'Asessment::Proses_assesment');
$routes->get('/Proses_approve_Assesment/(:segment)', 'Asessment::Proses_approve_Assesment/$1');
$routes->get('/tampil_asesmen', 'Asessment::tampil_asesmen');
$routes->get('/konfir_asesmen/(:segment)', 'Asessment::konfir_asesmen/$1');
$routes->post('/Proses_konfirmasi_asesmen/(:segment)', 'Asessment::Proses_konfirmasi_asesmen/$1');

// Pemeriksaan Narkoba 
$routes->get('/Pemeriksaan_Narkoba', 'Pemeriksaan_Narkoba::Pemeriksaan_Narkoba');
$routes->post('/Proses_Pemeriksaan_Narkoba', 'Pemeriksaan_Narkoba::Proses_Pemeriksaan_Narkoba');
$routes->get('/Proses_approve_Pemeriksaan_Narkoba/(:segment)', 'Pemeriksaan_Narkoba::Proses_approve_Pemeriksaan_Narkoba/$1');
$routes->get('/tampil_suket_narkoba', 'Pemeriksaan_Narkoba::tampil_suket_narkoba');
$routes->get('/proses_konfirmasi_suket_narkoba/(:segment)', 'Pemeriksaan_Narkoba::proses_konfirmasi_suket_narkoba/$1');
$routes->post('/Proses_kirim_suket/(:segment)', 'Pemeriksaan_Narkoba::Proses_kirim_suket/$1');

// Pemeriksaan kesehatan 
$routes->get('/add_pemeriksaan_kesehatan', 'Pemeriksaan_Kesehatan::add_pemeriksaan_kesehatan');
$routes->post('/Proses_pemeriksaan_kesehatan', 'Pemeriksaan_Kesehatan::Proses_pemeriksaan_kesehatan');
$routes->get('/Proses_approve_Pemeriksaan_kesehatan/(:segment)', 'Pemeriksaan_Kesehatan::Proses_approve_Pemeriksaan_kesehatan/$1');
$routes->get('/tampil_pemeriksaan_kesehatan', 'Pemeriksaan_Kesehatan::tampil_pemeriksaan_kesehatan');
$routes->get('/konfirmasi_email_kesehatan/(:segment)', 'Pemeriksaan_Kesehatan::konfirmasi_email_kesehatan/$1');
$routes->get('/proses_konfirmasi_suket_narkoba/(:segment)', 'Pemeriksaan_Kesehatan::proses_konfirmasi_suket_narkoba/$1');
$routes->post('/Proses_konfirmasi_suket_kesehatan/(:segment)', 'Pemeriksaan_Kesehatan::Proses_konfirmasi_suket_kesehatan/$1');

// betah besuk  
$routes->get('add_betah', 'Betah::add_betah');
$routes->post('Proses_betah', 'Betah::Proses_betah');
$routes->get('/Proses_approve_Betah/(:segment)', 'Betah::Proses_approve_Betah/$1');
$routes->get('/tampil_betah', 'Betah::tampil_betah');
$routes->get('/konfirmasi_betah/(:segment)', 'Betah::konfirmasi_betah/$1');
$routes->post('/Proses_konfirmasi_betah/(:segment)', 'Betah::Proses_konfirmasi_betah/$1');

// TAT
$routes->get('add_Tat', 'Min::add_Tat');
$routes->post('Proses_tat', 'Min::Proses_tat');
$routes->get('/Proses_approve_Min/(:segment)', 'Min::Proses_approve_Min/$1');
$routes->get('/tampil_permintaan_tat', 'Min::tampil_permintaan_tat');
$routes->get('/konfirmasi_Min/(:segment)', 'Min::konfirmasi_Min/$1');
$routes->post('/Proses_konfirmasi_Min/(:segment)', 'Min::Proses_konfirmasi_Min/$1');

// Sosialisasi
$routes->get('add_Sosialisasi', 'Sosialisasi::add_Sosialisasi');
$routes->post('Proses_Sosialisasi', 'Sosialisasi::Proses_Sosialisasi');
$routes->get('/Proses_approve_Edukasi/(:segment)', 'Sosialisasi::Proses_approve_Edukasi/$1');
$routes->get('/tampil_sosialisasi', 'Sosialisasi::tampil_sosialisasi');
$routes->get('/konfirmasi_sosialisasi/(:segment)', 'Sosialisasi::konfirmasi_sosialisasi/$1');
$routes->post('/Proses_konfirmasi_sosialisasi/(:segment)', 'Sosialisasi::Proses_konfirmasi_sosialisasi/$1');

// Tes Urine
$routes->get('Add_TesUrine', 'Urin::Add_TesUrine');
$routes->post('Proses_TesUrine', 'Urin::Proses_TesUrine');
$routes->get('/Proses_approve_urin/(:segment)', 'Urin::Proses_approve_urin/$1');
$routes->get('/tampil_tes_urin', 'Urin::tampil_tes_urin');
$routes->get('/konfirmasi_Urin/(:segment)', 'Urin::konfirmasi_Urin/$1');
$routes->post('/Proses_konfirmasi_Urin/(:segment)', 'Urin::Proses_konfirmasi_Urin/$1');
// $routes->get('Sosialisasi', 'Landingpage::Sosialisasi');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
