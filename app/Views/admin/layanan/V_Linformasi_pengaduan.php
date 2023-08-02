<?= $this->extend('templates/index'); ?>


<?= $this->Section('content'); ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Layanan Laporan Informasi Masyarakat</h5>
                                    </div>
                                    <div class="card-block">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Data Laporan Informasi Masyarakat</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table display" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Nomor Telpon</th>
                                                        <th>Status</th>
                                                        <!-- <th>Gambar</th> -->
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($M_LMasyarkat as $info) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $info['nama']; ?></td>
                                                            <td><?= $info['email']; ?></td>
                                                            <td><?= $info['no_telp']; ?></td>
                                                            <td>
                                                                <?php if ($info['status'] == 'selesai') { ?>
                                                                    <p>Selesai</p>
                                                                <?php } elseif ($info['status'] == 'konfirmasi') { ?>
                                                                    <a href="/LInfo_pengaduan_konfirmasi/<?= $info['id_info_masyarakat'] ?>">Konfirmasi</a>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <button type="submit" class="btn btn-primary">Detail</button>
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