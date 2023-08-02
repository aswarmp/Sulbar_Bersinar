<!--Page Title / Style Two-->
<section class="page-title style-two" style="background-image:url(ikon/images/background/9.jpg)">
    <div class="auto-container">
        <h1>Gallery</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="gallery">Gallery</a></li>
            <!-- <li>Case 02</li> -->
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Case Page Section-->
<div class="case-page-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <!--Project Block Two-->
                <?php foreach ($T_Galery as $tampil) : ?>
                    <div class="project-block-two col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url('ikon/images/resource/project-14.jpg') ?>" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <h2><?= $tampil['keterangan_galery']; ?></h2>
                                        <a href="/Detail_gallery/<?= $tampil['id_galery'] ?>" class="go"><span class="icon flaticon-next-3"></span>Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!--Styled Pagination-->
            <ul class="styled-pagination text-center">
                <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>
            <!--End Styled Pagination-->

        </div>
    </div>
</div>
<!--End Case Page Section-->