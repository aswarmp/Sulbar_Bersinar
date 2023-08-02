<?= $this->extend('templates/index'); ?>


<?= $this->Section('content'); ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- couser -->
                                    <div class="card" style="width: 18rem;">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="/galery/<?= $detail['gambar_1'] ?>" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="/galery/<?= $detail['gambar_2'] ?>" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="/galery/<?= $detail['gambar_3'] ?>" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><?= $detail['keterangan_galery'] ?></li>
                                            </ul>
                                            <br>
                                            <a href="/edit_galery/<?= $detail['id_galery'] ?>" class="btn btn-primary">Edit</a>
                                            <a href="/hapus_galery/<?= $detail['id_galery'] ?>" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Buttom -->

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
<?= $this->endSection(); ?>