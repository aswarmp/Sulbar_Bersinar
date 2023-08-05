<!--Page Title / Style Two-->
<section class="page-title style-two" style="background-image:url(ikon/images/background/1.png)">
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
            <?php foreach ($pagination as $tampil) : ?>
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
        <?php
        echo $pager->links('berita', 'pagination');
        ?>
        <!--End Styled Pagination-->

    </div>
</section>
<!--End Blog Small Section-->