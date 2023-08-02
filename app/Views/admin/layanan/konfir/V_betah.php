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
                                        <h5>Konfirmasi Layanan Besuk Tahanan</h5>
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
                                                <form action="<?= base_url('Proses_konfirmasi_betah/' . $konfir_betah['id_betah']) ?>" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email to</label>
                                                        <input type="text" name="email_tujuan" class="form-control" value="<?= $konfir_betah['email'] ?>" aria-describedby="emailHelp" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Subject</label>
                                                        <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">message</label>
                                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">File</label>
                                                        <input type="file" name="gambar" class="form-control" placeholder="Subject">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Send</button>
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