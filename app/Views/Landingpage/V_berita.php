<!--Page Title / Style Two-->
<section class="page-title style-two" style="background-image:url(ikon/images/background/9.jpg)">
    <div class="auto-container">
        <h1>Berita</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="Berita">Berita</a></li>
            <!-- <li>Berita</li> -->
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Blog Small Section-->
<section class="blog-small-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!--News Block Three-->
            <?php foreach ($berita as $tampil) : ?>
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="Detail_berita"><img src="/berita/<?= $tampil['gambar_1'] ?>" alt="" /></a>
                            <ul class="post-info">
                                <li><?= $tampil['tangal_berita'] ?> </li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="Detail_berita"><?= $tampil['judul_berita'] ?></a></h3>
                            <a href="/Detail_berita/<?= $tampil['id_berita'] ?>" class="read-more">Read More</a>
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
</section>
<!--End Blog Small Section-->