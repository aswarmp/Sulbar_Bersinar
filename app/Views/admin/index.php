<?= $this->extend('templates/index'); ?>


<?= $this->Section('content'); ?>
<?php $validation = \Config\Services::validation(); ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Admin</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Halaman Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Pengguna</h5>
                                    </div>
                                    <div class="card-block">
                                        <h4>SELAMT DATANG DI APLIKASI LAYANAN BADAN NARKOTIKA NASIONAL PROVINSI SULAWESI BARAT</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-6">
                                <div class="card Recent-Users">
                                    <div class="card-header">
                                        <h5>Pendaftar Layanan</h5>
                                    </div>
                                    <div class="card-block px-0 py-3">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <!-- Layanan Masyarakat -->
                                                    <?php foreach ($M_LMasyarkat->getResult() as $tampil) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $tampil->nama; ?></h6>
                                                                <p class="m-0"><?= $tampil->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $tampil->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve/<?= $tampil->id_info_masyarakat; ?>" class="label theme-bg text-white f-12"><?= $tampil->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Assesmen -->
                                                    <?php foreach ($M_Assesment->getResult() as $Assesment) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Assesment->nama; ?></h6>
                                                                <p class="m-0"><?= $Assesment->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Assesment->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Assesment/<?= $Assesment->id_assesment; ?>" class="label theme-bg text-white f-12"><?= $Assesment->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Informasi dan edukasi -->
                                                    <?php foreach ($M_Edukasi->getResult() as $Edukasi) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Edukasi->nama_lembaga; ?></h6>
                                                                <p class="m-0"><?= $Edukasi->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Edukasi->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Edukasi/<?= $Edukasi->id_edukasi; ?>" class="label theme-bg text-white f-12"><?= $Edukasi->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- TAT MIN -->
                                                    <?php foreach ($M_Min->getResult() as $Min) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Min->nama_lembaga; ?></h6>
                                                                <p class="m-0"><?= $Min->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Min->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Min/<?= $Min->id_tat; ?>" class="label theme-bg text-white f-12"><?= $Min->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Konsultasi Dokter -->
                                                    <?php foreach ($M_Konsul_dokter->getResult() as $Konsul) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Konsul->nama; ?></h6>
                                                                <p class="m-0"><?= $Konsul->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Konsul->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Konsul/<?= $Konsul->id_konsul_dokter; ?>" class="label theme-bg text-white f-12"><?= $Konsul->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Betah -->
                                                    <?php foreach ($M_Betah->getResult() as $Betah) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Betah->nama; ?></h6>
                                                                <p class="m-0"><?= $Betah->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Betah->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Betah/<?= $Betah->id_betah; ?>" class="label theme-bg text-white f-12"><?= $Betah->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Pemeriksaan Kesehatan -->
                                                    <?php foreach ($M_Pemeriksaan_kesehatan->getResult() as $Pemeriksaan_kesehatan) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Pemeriksaan_kesehatan->nama; ?></h6>
                                                                <p class="m-0"><?= $Pemeriksaan_kesehatan->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Pemeriksaan_kesehatan->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Pemeriksaan_kesehatan/<?= $Pemeriksaan_kesehatan->id_pemeriksaan_kesehatan; ?>" class="label theme-bg text-white f-12"><?= $Pemeriksaan_kesehatan->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Pemeriksaan Narkoba -->
                                                    <?php foreach ($M_Pemeriksaan_Narkoba->getResult() as $Pemeriksaan_Narkoba) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $Pemeriksaan_Narkoba->nama; ?></h6>
                                                                <p class="m-0"><?= $Pemeriksaan_Narkoba->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $Pemeriksaan_Narkoba->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_Pemeriksaan_Narkoba/<?= $Pemeriksaan_Narkoba->id_pemeriksaan; ?>" class="label theme-bg text-white f-12"><?= $Pemeriksaan_Narkoba->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <!-- Pemeriksaan Narkoba -->
                                                    <?php foreach ($M_Urin->getResult() as $urin) : ?>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1"><?= $urin->nama; ?></h6>
                                                                <p class="m-0"><?= $urin->jenis_layanan; ?></p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i><?= $urin->tanggal; ?></h6>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="label theme-bg2 text-white f-12">Reject</a> -->
                                                                <a href="/Proses_approve_urin/<?= $urin->id_urin; ?>" class="label theme-bg text-white f-12"><?= $urin->status; ?></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<?= $this->endSection(); ?>