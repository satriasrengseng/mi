<!DOCTYPE html>
<html lang="en">
<head>
    <title>Madrasah Ibtidaiyah Satria</title>

    <!-- Madrasah Ibtidaiyah Satria -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/vendor/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/color-1.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/satria/css/transition.css">

    <link href="https://fonts.googleapis.com/css?family=Mrs+Saint+Delafield|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.html"></script>
    <style>
    .bar1, .bar2, .bar3 {
        width: 35px;
        height: 5px;
        background-color: #fff;
        margin: 6px 0;
        transition: 0.4s;
    }

    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
        transform: rotate(-45deg) translate(-9px, 6px) ;
    }

    .change .bar2 {opacity: 0;}

    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
        transform: rotate(45deg) translate(-8px, -8px) ;
    }
    </style>
    <!-- Yayasam Satria -->

</head>

<body id="home">
    <div class="wrapper">
<!-- Header -->
    <header id="header" class="main-header sticky-1">
        <div class="container">

            <!-- logo -->
            <div class="logo-holder">
                <strong><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/satria/images/satria/logo.png" alt="logo"></a></strong>
            </div>
            <!-- logo -->

            <!-- Navigation -->
            <nav class="navigation-holder">
                <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"onclick="myFunction(this)">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="tc-navigation">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li>
                            <a href="#.">Profil</a>
                            <ul>
                                <li><a href="<?= base_url() ?>identitas/">Identitas Sekolah</a></li>
                                <li><a href="<?= base_url() ?>galeri/">Galeri</a></li>
                                <li><a href="<?= base_url() ?>struktur/">Struktur Organisasi</a></li>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Kurikulum</a>
                            <ul>
                                <li><a href="<?= base_url() ?>kalender/">Kalender Akademik</a></li>
                                <li><a href="<?= base_url() ?>jadwal/">Jadwal Pelajaran</a></li>
                                <li><a href="<?= base_url() ?>silabus/">Silabus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#.">Kesiswaan</a>
                            <ul>
                                <!-- <li><a href="#.">Daftar Siswa</a></li> -->
                                <li><a href="<?= base_url() ?>exkul/">Ekstrakulikuler</a>
                                    <!-- <ul>
                                        <li><a href="#.">Futsal</a></li>
                                        <li><a href="#.">Rohis</a></li>
                                        <li><a href="#.">Basket</a></li>
                                        <li><a href="#.">English Club</a></li>
                                        <li><a href="#.">Paskibra</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url() ?>osis/">OSIS</a></li>
                                <li><a href="<?= base_url() ?>prestasi/">Prestasi Siswa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#.">PPDB</a>
                            <ul>
                                <li><a href="#.">Info PPDB</a></li>
                                <li><a href="#.">Pengisian Online</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="info">Info Sekolah</a>
                            <ul>
                                <li><a href="https://ubk.kemdikbud.go.id/">UNBK</a></li>
                                <li><a href="<?= base_url() ?>info/kelulusan">Kelulusan</a></li>
                                <li><a href="<?= base_url() ?>info/ujian">Ujian</a></li>
                                <li><a href="<?= base_url() ?>kontak">kontak</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url() ?>event">Event</li></a>
                    </ul>
                </div>
            </nav>
            <!-- Navigation -->

            <!-- Cart Option -->
            <div class="cart-and-search">
                <ul>
                    <li>
                        <a href="#search"><i class="fa fa-search"></i></a>
                        <div id="search">
                            <button type="button" class="close">×</button>
                            <form>
                                <input type="search" value="" placeholder="type keyword(s) here" />
                                <button type="submit" class="pink-btn">Search</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Cart Option -->

        </div>
    </header>
    <!-- Header -->

        <?= $contents ?>

        <!-- Footer -->
        <footer id="footer" class="footer overlay-dark">
            <div class="container">

                <!-- Footer Logo Section -->
                <div class="footer-logo-sec">
                    <div class="footer-logo-inner">
                        <a class="footer-logo" href="#"><img src="<?= base_url() ?>assets/satria/images/mi/logo.png" alt="logo"></a>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Logo Section -->

                <!-- Footer Columns -->
                <div class="row">
                    <div class="footer-columns">

                        <!-- Footer Column -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 r-full-width">
                            <div class="footer-column">
                                <h4>Contact :</h4>
                                <div class="contact-widget">
                                    <div class="location">
                                        <span class="location-icon"><i class="fa fa-map-marker"></i></span>
                                        <div>
                                            <p>Jl. Raya Srengseng Nomor 26 A Srengseng </p>
                                            <p></p>
                                            <p></p>
                                            <p>Jakarta Barat</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="contact-widget">
                                    <div class="location">
                                        <span class="location-icon"><i class="fa fa-mobile"></i></span>
                                        <div>
                                            <p>King Street, Melbourne</p>
                                            <p>VIC 3000, Australia84</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- Footer Column -->


                        <!-- Footer Column -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 r-full-width">
                            <div class="footer-column">
                                <h4>School Time :</h4>
                                <div class="contact-widget">
                                    <div class="location">
                                        <span class="location-icon"><i class="fa fa-clock-o"></i></span>
                                        <div>
                                            <p>MON - THU :  8:00 AM To 5:00 PM</p>
                                            <p>FRI - SAT : 8:00 AM To 2:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Column -->

                        <!-- Footer Column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 r-full-width">
                            <div class="footer-column">
                                <h4>Location :</h4>
                                <div id="location-map" class="location-map"></div>
                            </div>
                        </div>
                        <!-- Footer Column -->

                    </div>
                </div>
                <!-- Footer Columns -->

                <!-- Copy Rights -->
                <div class="copy-rights">
                    <p>Copyright ©2016 Yayasan Satria</p>
                </div>
                <!-- Copy Rights -->

            </div>
        </footer>
        <!-- Footer -->

</div>
<!-- End Wraper -->
    <!-- YAYASAN SATRIA -->
    <script src="<?= base_url() ?>assets/satria/js/vendor/jquery.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/vendor/bootstrap.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?= base_url() ?>assets/satria/js/gmap3.min.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/parallax.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/contact-form.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/tabulous.html"></script>
    <script src="<?= base_url() ?>assets/satria/js/countdown.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/owl-carousel.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/nstslider.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/odometer.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/classie.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/bootstrap-select.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/colorpicker.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/appear.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/prettyPhoto.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/isotope.pkgd.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/sticky.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/wow-min.js"></script>
    <script src="<?= base_url() ?>assets/satria/js/main.js"></script>
    <script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
    </script>
    <script type="text/javascript">
        $(function() {
            var form = $('#comment-form');
            var sumbit_button = form.find($('#btn-send'));

            $('#comment-form').submit(function() { 
               $.ajax({ 
                   type : "POST",
                   //set the data type
                   dataType:'json',
                   data:  { "nama": $('#nama').val(), "status": $('#status').val(), "desc_testimoni": $('#desc_testimoni').val() },
                   url: "<?php echo base_url('identitas') ?>", // target element(s) to be updated with server response 
                   cache : false,
                   //check this in Firefox browser
                   success : function(response){ console.log(response); alert(response)}
               });        
               return true; 
            }); 
        });


    </script>
    <!-- YAYASAN SATRIA -->

</body>

</html>
