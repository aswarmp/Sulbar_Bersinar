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
                                        <h5>Galery</h5>
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
                                        <h5>Daftar Galery</h5>
                                        <!-- <span class="d-block m-t-5">use class <code>table</code> inside table element</span> -->
                                        <a type="button" href="Buat_galery" class="btn btn-primary" data-toggle="tooltip">Buat Galery</a>
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
                                                        <th>Keterangan Galery</th>
                                                        <!-- <th>Gambar</th> -->
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($M_galery as $galery) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $galery['keterangan_galery']; ?></td>
                                                            <td>
                                                                <form action="detail_galery/<?= $galery['id_galery'] ?>">
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