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
                                        <h5>Edit Galery</h5>
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
                                                <form action="<?= base_url('Proses_edit_galery/' . $edit_galery['id_galery']) ?>" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <div class="form-group">
                                                        <input type="hidden" name="gambar_1lama" value="<?= $edit_galery['gambar_1'] ?>">
                                                        <input type="hidden" name="gambar_2lama" value="<?= $edit_galery['gambar_2'] ?>">
                                                        <input type="hidden" name="gambar_3lama" value="<?= $edit_galery['gambar_3'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan Galery</label>
                                                        <textarea class="form-control" name="keterangan_galery" rows="3"><?= $edit_galery['keterangan_galery'] ?></textarea>
                                                    </div>

                                                    <!-- gambar 1 -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <img src="/galery/<?= $edit_galery['gambar_1'] ?>" class="img-thumbnail img-preview" alt="">
                                                            <label><?= $edit_galery['gambar_1'] ?></label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" value="<?= $edit_galery['gambar_1'] ?>" class="form-control custom-file-label" id="gambar_1" name="gambar_1" onchange="previewGambar1()">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- gambar 2 -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <img src="/galery/<?= $edit_galery['gambar_2'] ?>" class="img-thumbnail img-preview2" alt="">
                                                            <label for="" class="custom-file-label2"><?= $edit_galery['gambar_2'] ?></label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" value="<?= $edit_galery['gambar_2'] ?>" class="form-control custom-file-label2" id="gambar_2" name="gambar_2" onchange="tampil2()">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- gambar 3 -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <img src="/galery/<?= $edit_galery['gambar_3'] ?>" class="img-thumbnail img-preview3" alt="">
                                                            <label for="" class="custom-file-label3"><?= $edit_galery['gambar_3'] ?></label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-file">
                                                                <input type="file" value="<?= $edit_galery['gambar_3'] ?>" class="form-control " id="gambar_3" name="gambar_3" onchange="show3()">
                                                            </div>
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