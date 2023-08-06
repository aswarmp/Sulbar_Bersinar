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
                                        <h5>Rekap Surat pemeriksaan Kesehatan</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="col-md-4">
                                            <form action="proses_cetak_SuketKesehatan" method="post" target="_blank">
                                                <div class="form-group">
                                                    <label>Tanggal Awal</label>
                                                    <input type="date" name="tglawal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Akhir</label>
                                                    <input type="date" name="tglakhir" class="form-control" required>
                                                </div>
                                                <button type="submit" class="btn btn-block btn-info"><i class="fa fa-print"></i>Cetak</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Layanan Surat pemeriksaan Kesehatan</h5>
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
                                                    <?php foreach ($suket as $info) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $info['nama']; ?></td>
                                                            <td><?= $info['email']; ?></td>
                                                            <td><?= $info['no_telp']; ?></td>
                                                            <td>
                                                                <?php if ($info['status'] == 'selesai') { ?>
                                                                    <p>Selesai</p>
                                                                <?php } elseif ($info['status'] == 'konfirmasi') { ?>
                                                                    <a href="/konfirmasi_email_kesehatan/<?= $info['id_pemeriksaan_kesehatan'] ?>">Konfirmasi</a>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($info['status'] == 'selesai') { ?>
                                                                    <button type="submit" class="btn btn-primary">Detail</button>
                                                                <?php }  ?>
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