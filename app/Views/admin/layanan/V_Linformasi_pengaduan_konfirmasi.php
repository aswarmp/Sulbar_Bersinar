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
                                        <h5>Konfirmasi Layanan Informasi Masyarakat</h5>
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
                                                <form action="<?= base_url('Proses_konfirmasi_LI_masyarakat/' . $konforimasi_LI['id_info_masyarakat']) ?>" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email to</label>
                                                        <input type="text" name="email_tujuan" class="form-control" value="<?= $konforimasi_LI['email'] ?>" aria-describedby="emailHelp" placeholder="Email">
                                                        <small class="form-text text-muted">Jangan di edit</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Subject</label>
                                                        <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">message</label>
                                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
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