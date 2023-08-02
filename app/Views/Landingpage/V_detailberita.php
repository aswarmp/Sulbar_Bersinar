<!--Page Title / Style Two-->
<section class="page-title style-two" style="background-image:url(/ikon/images/background/9.jpg)">
    <div class="auto-container">
        <h1>Detail Berita</h1>
        <ul class="page-breadcrumb">
            <li><a href="User">Home</a></li>
            <li><a href="User_berita">Berita</a></li>
            <li>Detail Berita</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Page Title / Style Two
<section class="page-title style-two" style="background-image:url(/ikon/images/background/9.jpg)">
    <div class="auto-container">
        <h1 class="alternate">Five Common Mistakes When You <br> Managing Finances</h1>
        <ul class="blog-info-post">
            <li>By James</li>
            <li>June 24,2018</li>
            <li>0 Comments</li>
        </ul>
    </div>
</section>
End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Blog Single-->
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!--Blog Single-->
                <div class="blog-single">
                    <div class="inner-box">
                        <!--Title Box-->
                        <div class="title-box">
                            <div class="title">Judul Berita</div>
                            <h2><?= $detail['judul_berita'] ?></h2>
                            <div class="tags"><span>Admin :</span> <?= $detail['tangal_berita'] ?></div>
                        </div>
                        <!--Lower Box-->
                        <div class="lower-box">
                            <p><?= $detail['keterangan_berita'] ?></p>
                            <div class="image">
                                <div class="sidebar-widget-three testimonial-widget">
                                    <div class="widget-inner" style="background-image:url(/ikon/images/resource/testimonial-3.jpg)">
                                        <div class="testimonial-widget-carousel owl-carousel owl-theme">

                                            <!--Testimonial Block Widget-->
                                            <div class="testimonial-widget-block">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="/berita/<?= $detail['gambar_1'] ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Testimonial Block Widget-->
                                            <div class="testimonial-widget-block">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="/berita/<?= $detail['gambar_2'] ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Testimonial Block Widget-->
                                            <div class="testimonial-widget-block">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="/berita/<?= $detail['gambar_3'] ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">

                    <!-- Search -->
                    <div class="sidebar-widget search-box-three">
                        <div class="sidebar-title-three">
                            <h2>Search</h2>
                        </div>
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Testimonial Search -->
                    <div class="sidebar-widget-three testimonial-widget">
                        <div class="widget-inner" style="background-image:url(/ikon/images/resource/testimonial-3.jpg)">
                            <div class="testimonial-widget-carousel owl-carousel owl-theme">

                                <!--Testimonial Block Widget-->
                                <div class="testimonial-widget-block">
                                    <div class="inner-box">
                                        <div class="quote-icon">
                                            <span class="icon flaticon-left-quote-2"></span>
                                        </div>
                                        <div class="text">Denouncing pleasure praising pain was born & our all will gives you will completed account of system.</div>
                                        <div class="author">Marry Fenincy</div>
                                    </div>
                                </div>

                                <!--Testimonial Block Widget-->
                                <div class="testimonial-widget-block">
                                    <div class="inner-box">
                                        <div class="quote-icon">
                                            <span class="icon flaticon-left-quote-2"></span>
                                        </div>
                                        <div class="text">Denouncing pleasure praising pain was born & our all will gives you will completed account of system.</div>
                                        <div class="author">Marry Fenincy</div>
                                    </div>
                                </div>

                                <!--Testimonial Block Widget-->
                                <div class="testimonial-widget-block">
                                    <div class="inner-box">
                                        <div class="quote-icon">
                                            <span class="icon flaticon-left-quote-2"></span>
                                        </div>
                                        <div class="text">Denouncing pleasure praising pain was born & our all will gives you will completed account of system.</div>
                                        <div class="author">Marry Fenincy</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>
</div>
<!--End Blog Small Section-->