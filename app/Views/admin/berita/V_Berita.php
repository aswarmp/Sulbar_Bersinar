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
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Daftar Berita</h5>
                                        <!-- <span class="d-block m-t-5">use class <code>table</code> inside table element</span> -->
                                        <a type="button" href="Buat_berita" class="btn btn-primary" data-toggle="tooltip">Buat Berita</a>
                                    </div>
                                    <?php if (session()->getFlashdata('sukses') !== NULL) : ?>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <?php echo session()->getFlashdata('sukses'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table display" id="myTable">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama Berita</th>
                                                        <th>Keterangan Berita</th>
                                                        <th>Tanggal Berita</th>
                                                        <!-- <th>Gambar</th> -->
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($M_berita as $berita) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $berita['judul_berita']; ?></td>
                                                            <td><?= $berita['keterangan_berita']; ?></td>
                                                            <td><?= $berita['tangal_berita']; ?></td>
                                                            <!-- <td><?= $berita['judul_berita']; ?></td> -->
                                                            <td>
                                                                <form action="detail_berita/<?= $berita['id_berita'] ?>">
                                                                    <button type="submit" class="btn btn-primary">Detail</button>
                                                                </form>
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