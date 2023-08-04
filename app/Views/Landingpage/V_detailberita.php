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

                                        <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo base_url('ikon/images/resource/case-4.jpg')?>" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo base_url('ikon/images/resource/case-4.jpg')?>" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo base_url('ikon/images/resource/case-4.jpg')?>" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
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
            <!-- <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">

                   
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
                </aside>
            </div> -->

        </div>
    </div>
</div>
<!--End Blog Small Section-->