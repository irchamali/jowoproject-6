<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $site_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('theme/fonts/icomoon/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap-datepicker.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('theme/fonts/flaticon/font/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/aos.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/jquery.fancybox.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('theme/css/style.css'); ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap">

            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4">
                            <h1 class="my-0 site-logo"><a href="#"><img src="<?= base_url() . 'theme/images/' . $logo; ?>" width="145" height="40" alt=""></a></h1>
                        </div>
                        <div class="col-6 col-md-8">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">

                                    <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                            <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                                        </a></div>

                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                                        <li><a href="#home-section" class="nav-link">Home</a></li>
                                        <li><a href="#what-we-do-section" class="nav-link">Layanan</a></li>
                                        <li><a href="#about-section" class="nav-link">Tentang Kami</a></li>
                                        <li><a href="#portfolio-section" class="nav-link">Portofolio</a></li>
                                        <li><a href="#studio-section" class="nav-link">Galeri</a></li>
                                        <li><a href="#contact-section" class="nav-link">Kontak</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-navbar-wrap -->

        <div class="site-blocks-cover" id="home-section">
            <div class="img-wrap">
                <div class="owl-carousel slide-one-item hero-slider">
                    <div class="slide">
                        <img src="<?= base_url('theme/images/F1.jpg'); ?>" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('theme/images/F2.jpg'); ?>" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="<?= base_url('theme/images/F3.jpg'); ?>" alt="Image">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto align-self-center">
                        <div class="intro">
                            <div class="heading">
                                <h1>Fanjoyo Group</h1>
                            </div>
                            <div class="text">
                                <p class="sub-text mb-5">Solusi Ramah, Rumah Anda!</p>
                                <p><a href="#" target="_blank" class="btn btn-outline-primary btn-md">Mulai bikin proyek</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-blocks-cover -->

        <div class="site-section" id="what-we-do-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 section-title">
                        <span class="sub-title mb-2 d-block">What We Do</span>
                        <h2 class="title text-primary">Layanan yang kami berikan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 ml-auto">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="service h-100">
                                    <h3>Bangun baru/renovasi</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <p><a href="#" class="readmore">Learn more</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="service h-100">
                                    <h3>Partisi/plafon</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <p><a href="#" class="readmore">Learn more</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="service h-100">
                                    <h3>Kontruksi baja/pagar/kanopi</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <p><a href="#" class="readmore">Learn more</a></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="service h-100">
                                    <h3>Kusen aluminium</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <p><a href="#" class="readmore">Learn more</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="service h-100">
                                    <h3>Atap galvalum</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <p><a href="#" class="readmore">Learn more</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="service h-100">
                                    <h3>Interior</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <p><a href="#" class="readmore">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-section -->

        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5">
                        <img src="<?= base_url('theme/images/glint_about_1.jpg'); ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 ml-auto section-title">
                        <span class="sub-title mb-2 d-block">About Us</span>
                        <h2 class="title text-primary mb-3">Tentang Kami</h2>
                        <p class="mb-4">Kami bergerak dalam bidang konstruksi, renovasi rumah tinggal, kantor, ruko maupun gudang. Kami sudah berpengalaman dalam renovasi dengan harga yang kompetitif. Komitmen kami adalah menjaga kepercayaan dalam hal renovasi atau mewujudkan bangunan baru yang sesuai dengan keinginan dan kebutuhan klien.</p>

                        <div class="d-flex">
                            <ul class="list-unstyled ul-check success mr-5">
                                <li>Desain</li>
                                <li>Partisi / plafon</li>
                                <li>Pengecatan</li>
                                <li>Galvalum atap</li>
                            </ul>
                            <ul class="list-unstyled ul-check success">
                                <li>Bangun baru / renovasi</li>
                                <li>Konstruksi baja / pagar / kanopi</li>
                                <li>Kusen Alumunium</li>
                            </ul>
                        </div>
                        <p><a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=gIB2egm7tL8" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
                    </div>
                </div>
            </div>
        </div> <!-- .END site-section -->


        <!-- <div class="site-section" id="what-we-do-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 section-title">
                        <span class="sub-title mb-2 d-block">Meet The Team</span>
                        <h2 class="title text-primary">We are talented people.</h2>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 mb-5 person">
                        <img src="<?= base_url('theme/images/person_1.jpg'); ?>" alt="Image" class="img-fluid mb-5">

                        <div class="row">
                            <div class="col-lg-10 ml-auto">
                                <div class="pr-lg-5">
                                    <h3>Lailatul Jihan</h3>
                                    <span class="mb-4 d-block">CEO, Co-Founder</span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    <p class="d-flex align-items-center">
                                        <span class="mr-3 text-black">Follow me:</span>
                                        <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                        <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                                        <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                        <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                        <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 person">
                        <img src="<?= base_url('theme/images/person_2.jpg'); ?>" alt="Image" class="img-fluid mb-5">
                        <div class="row">
                            <div class="col-lg-10 ml-auto">
                                <div class="pr-lg-5">
                                    <h3>Chris Peters</h3>
                                    <span class="mb-4 d-block">CTO, Co-Founder</span>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                    <p class="d-flex align-items-center">
                                        <span class="mr-3 text-black">Follow me:</span>
                                        <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                        <a href="#" class="github p-2"><span class="icon-github"></span></a>
                                        <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                        <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                        <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="site-section" id="portfolio-section">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-md-7 section-title text-center mx-auto">
                        <span class="sub-title mb-2 d-block">Recent Works</span>
                        <h2 class="title text-primary mb-3">Beberapa inovasi rumah yang telah kami kerjakan</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?= base_url('theme/images/sq_img_2.jpg'); ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
                        <h3>Project title one</h3>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
                        <div class="testimonial bg-white h-100">
                            <blockquote class="mb-3">
                                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <div class="d-flex align-items-center vcard">
                                <figure class="mb-0 mr-3">
                                    <img src="<?= base_url('theme/images/person_3.jpg'); ?>" alt="Image" class="img-fluid ounded-circle">
                                </figure>
                                <div class="vcard-text">
                                    <span class="d-block">Jacob Spencer</span>
                                    <span class="position">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="<?= base_url('theme/images/sq_img_4.jpg'); ?>" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
                        <h3>Project title two</h3>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
                        <div class="testimonial bg-white h-100">
                            <blockquote class="mb-3">
                                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                            </blockquote>
                            <div class="d-flex align-items-center vcard">
                                <figure class="mb-0 mr-3">
                                    <img src="<?= base_url('theme/images/person_4.jpg'); ?>" alt="Image" class="img-fluid ounded-circle">
                                </figure>
                                <div class="vcard-text">
                                    <span class="d-block">Jean Smith</span>
                                    <span class="position">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?= base_url('theme/'); ?>images/sq_img_6.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
                        <h3>Project title three</h3>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="mb-4><a href=" #" class="readmore">Visit website</a></p>
                        <div class="testimonial bg-white h-100">
                            <blockquote class="mb-3">
                                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <div class="d-flex align-items-center vcard">
                                <figure class="mb-0 mr-3">
                                    <img src="<?= base_url('theme/images/person_3.jpg'); ?>" alt="Image" class="img-fluid ounded-circle">
                                </figure>
                                <div class="vcard-text">
                                    <span class="d-block">Jacob Spencer</span>
                                    <span class="position">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-md-7 section-title text-center mx-auto">
                        <span class="sub-title mb-2 d-block">Problem Solving</span>
                        <h2 class="title text-primary mb-3">Mengapa memilih kami?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="testimonial bg-white h-100">
                            <blockquote class="mb-3">
                                <p>&ldquo;Banyak klient yang sudah <strong>mempercayai </strong> kinerja kami.&rdquo;</p>
                            </blockquote>
                            <div class="d-flex align-items-center vcard">
                                <figure class="mb-0 mr-3">
                                    <img src="<?= base_url('theme/images/person_3.jpg'); ?>" alt="Image" class="img-fluid ounded-circle">
                                </figure>
                                <div class="vcard-text">
                                    <span class="d-block">TERPERCAYA</span>
                                    <span class="position">Trusted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="testimonial bg-white h-100">
                            <blockquote class="mb-3">
                                <p>&ldquo;Penyelesaian pekerjaan dengan <strong>waktu maksimal</strong>.&rdquo;</p>
                            </blockquote>
                            <div class="d-flex align-items-center vcard">
                                <figure class="mb-0 mr-3">
                                    <img src="<?= base_url('theme/images/person_4.jpg'); ?>" alt="Image" class="img-fluid ounded-circle">
                                </figure>
                                <div class="vcard-text">
                                    <span class="d-block">CEPAT</span>
                                    <span class="position">Express</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="testimonial bg-white h-100">
                            <blockquote class="mb-3">
                                <p>&ldquo;Dikerjakan oleh pekerja <strong>terampil dan berpengalaman</strong> pada bidangnya.&rdquo;</p>
                            </blockquote>
                            <div class="d-flex align-items-center vcard">
                                <figure class="mb-0 mr-3">
                                    <img src="<?= base_url('theme/images/person_4.jpg'); ?>" alt="Image" class="img-fluid ounded-circle">
                                </figure>
                                <div class="vcard-text">
                                    <span class="d-block">BERPENGALAMAN</span>
                                    <span class="position">Experienced</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="site-section" id="studio-section">
            <div class="container">

                <div class="row mb-5 ">
                    <div class="col-md-7 section-title text-center mx-auto">
                        <span class="sub-title mb-2 d-block">Photos</span>
                        <h2 class="title text-primary mb-3">Galeri</h2>
                    </div>
                </div>

                <div id="posts" class="row no-gutter">
                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_1.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_1.jpg'); ?>">
                        </a>
                    </div>
                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_2.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_2.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_3.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_3.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_4.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_4.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_5.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_5.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_6.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_6.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_7.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_7.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_9.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_9.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_10.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_10.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_11.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_11.jpg'); ?>">
                        </a>
                    </div>

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="<?= base_url('theme/images/sq_img_12.jpg'); ?>" class="item-wrap" data-fancybox="gal">
                            <span class="icon-search2"></span>
                            <img class="img-fluid" src="<?= base_url('theme/images/sq_img_12.jpg'); ?>">
                        </a>
                    </div>


                </div>
            </div>
        </div> <!-- END .site-section -->

        <div class="site-section" id="contact-section">
            <div class="container">
                <form action="" class="contact-form">

                    <div class="section-title text-center mb-5">
                        <span class="sub-title mb-2 d-block">Get In Touch</span>
                        <h2 class="title text-primary">Hubungi Kami</h2>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-md">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>
        </div> <!-- END .site-section -->

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="footer-heading mb-4">Fanjoyo Group</h3>
                                <p>Klik ikon ke link sosmed kami</p>
                                <div class="mb-4">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="pl-3 pr-3"><span class="icon-phone"></span>&nbsp +62 812-1634-8401</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=+6281216348401" class="pl-3 pr-3"><span class="icon-whatsapp"></span>&nbsp +62 812-1634-8401</a></li>
                                        <li><a href="mailto:fanjoyogroup@gmail.com" class="pl-3 pr-3"><span class="icon-envelope"></span>&nbsp fanjoyogroup@gmail.com</a></li>
                                        <li><a href="http://instagram.com/fanjoyogroup" class="pl-3 pr-3"><span class="icon-instagram"></span>&nbsp @fanjoyogroup</a></li>
                                        <li><a href="http://facebook.com" class="pl-3 pr-3"><span class="icon-facebook"></span>&nbsp fanjoyogroup</a></li>
                                    </ul>
                                </div>
                                <!-- <p>Pesan Sekarang</p>
                                <form method="post" class="form-subscribe">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                                    </div>
                                    <div class="form-group">
                                        <a href="https://api.whatsapp.com/send?phone=+6285730110225&text=Hello%20kak,%20Saya%20sudah%20mengecek%20produk%20Anda%20dan%20Saya%20Tertarik%20untuk.."><i class="fa fa-whatsapp"></i> Order Now</a></button>
                                        <button class="btn btn-success px-5" type="submit">Subscribe</button>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 ml-auto">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Nav Link</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#home-section" class="smoothscroll">Home</a></li>
                                    <li><a href="#what-we-do-section" class="smoothscroll">Layanan</a></li>
                                    <li><a href="#about-section" class="smoothscroll">Tentang Kami</a></li>
                                    <li><a href="#team-section" class="smoothscroll">Portofolio</a></li>
                                    <li><a href="#studio-section" class="smoothscroll">Galeri</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-2">Alamat Bisnis Kami</h3>
                            <p>Temukan lokasi kami via maps.</p>
                            <div class="mb-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.960098877074!2d112.32601101450673!3d-7.579322476976965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786b0d1f8a20e9%3A0xb88363c2452cca1b!2sFANJOYO%20GROUP!5e0!3m2!1sid!2sid!4v1609340579900!5m2!1sid!2sid" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row pt-3 mt-3 text-center">
                    <div class="col-md-12">
                        <p>
                            &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Fanjoyo Group | Dev with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://jowokode.com" target="_blank">JowoKode</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= base_url('theme/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('theme/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('theme/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('theme/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('theme/js/aos.js'); ?>"></script>
    <script src="<?= base_url('theme/js/jquery.sticky.js'); ?>"></script>
    <script src="<?= base_url('theme/js/stickyfill.min.js'); ?>"></script>
    <script src="<?= base_url('theme/js/jquery.easing.1.3.js'); ?>"></script>
    <script src="<?= base_url('theme/js/isotope.pkgd.min.js'); ?>"></script>

    <script src="<?= base_url('theme/js/jquery.fancybox.min.js'); ?>"></script>
    <script src="<?= base_url('theme/js/main.js'); ?>"></script>

    <!-- <script src="<?= base_url('theme/js/jquery.counterup.min.js') ?>"></script> -->
</body>

</html>