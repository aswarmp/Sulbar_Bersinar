<?= $this->extend('templates/index'); ?>


<?= $this->Section('content'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Tambahkan Galery</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <h4>Periksa Entrian Form</h4>
                                                </hr />
                                                <?php echo session()->getFlashdata('error'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="<?= base_url('Proses_galery'); ?>" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label>Keterangan Galery</label>
                                                        <textarea class="form-control" name="keterangan_galery" rows="3"></textarea>
                                                        <small class="form-text text-muted">Isikan Keterangan galery dengan benar</small>
                                                    </div>
                                                    <!-- gambar 1 -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control custom-file-label" id="gambar_1" name="gambar_1" onchange="previewGambar1()">
                                                                <!-- <label for="gambar_2" class="custom-file-label2" form="gambar_2">Pilih Gambar</label> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <img src="/berita/images.png" class="img-thumbnail img-preview" alt="">
                                                        </div>
                                                    </div>


                                                    <!-- gambar 2 -->
                                                    <div class="form-group row">

                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control custom-file-label2" id="gambar_2" name="gambar_2" onchange="tampil2()">
                                                                <!-- <label for="gambar_2" class="custom-file-label2" form="gambar_2">Pilih Gambar</label> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <img src="/berita/images.png" class="img-thumbnail img-preview2" alt="">
                                                        </div>
                                                    </div>

                                                    <!-- gambar 3 -->
                                                    <div class="form-group row">

                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control custom-file-label3" id="gambar_3" name="gambar_3" onchange="show3()">
                                                                <!-- <label for="gambar_2" class="custom-file-label2" form="gambar_2">Pilih Gambar</label> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <img src="/berita/images.png" class="img-thumbnail img-preview3" alt="">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button type="reset" class="btn btn-danger">Batal</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Input group -->

                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>