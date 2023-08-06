<!--Case Single Section-->
<section class="case-single-section">
    <div class="auto-container">
        <!--Upper Box-->
        <div class="upper-box">
            <div class="row clearfix">

                <!--Title Column-->


                <!--Image Column-->
                <div class="image-column col-md-8 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="/galery/<?= $detail['gambar_1'] ?>" alt="" />
                    </div>
                    <hr>
                </div>

                <div class="image-column col-md-8 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="/galery/<?= $detail['gambar_2'] ?>" alt="" />
                    </div>
                    <hr>
                </div>

                <div class="image-column col-md-8 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="/galery/<?= $detail['gambar_3'] ?>" alt="" />
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <!--End Upper Box-->

        <!--Description Box-->
        <div class="description-box">
            <h2>Keterangan Foto</h2>
            <div class="text"><?= $detail['keterangan_galery']; ?></div>
            <div class="row clearfix">
            </div>
        </div>
    </div>
</section>
<!--End Case Single Section-->