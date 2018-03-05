
            <!-- Banner & Enquiry Form -->
    <div class="captionsss">
        <div id="slidersss">
        <figure>
            <img src="<?= base_url() ?>assets/satria/images/mi/head.jpg" alt>
        </figure>
        </div>
            <p></p>
    </div>
    <div class="section-counter">
        <marquee>Bismillahirrohman nir Rohiim</marquee>
    </div>
    <!-- Banner slider -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- About The School -->
        <section class="about-school">
            <div class="container">
                <div class="row">

                    <!-- About Img Section -->
                    <div class="col-sm-5">
                        <figure class="about-sec-img">
                            <img class="animate fadeInLeft" data-wow-delay="0.5s" src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="about-sec">
                        </figure>
                    </div>
                    <!-- About Img Section -->

                    <!-- About To School -->
                    <div class="col-sm-7">
                        <div class="about-sec section-padding-top">
                            <?php echo $about['about_desc']; ?>
                            <!-- <a class="pink-btn" href="#">read more</a> -->
                        </div>
                    </div>
                    <!-- About To School -->

                </div>
            </div>
        </section>
        <!-- About The School -->

        <!-- Upcoming Events -->
        <section class="upcoming-events-holder section-padding overlay-dark" data-enllax-ratio="-.3" style="background: url(<?= base_url() ?>assets/satria/images/event-bg.jpg) 50% 0% no-repeat fixed;">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading white-heading">
                        <h2>Upcoming Events<span>Dont Miss it</span></h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Upcoming Events Slider -->
                <div class="upcoming-events">
                    <div class="row">
                        <?php
                            $i = 0;
                            foreach ($events as $event) {
                                $i++;
                                if ($i % 2 == 0) { ?>
                                    <!-- Events Post -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 r-full-width">
                                        <div class="post-holder">
                                            <div class="row no-gutters">

                                                <!-- Post Img -->
                                                <div class="col-lg-6 col-sm-12 col-xs-12 r-full-width">
                                                    <figure class="post-img">
                                                        <img src="<?= base_url() ?>/cms/<?php echo $event['event_pict']; ?>" alt="img-01">
                                                    </figure>
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="col-lg-6 col-sm-12 col-xs-12 r-full-width">
                                                    <div class="post-detail">
                                                        <h3><a href="<?php echo base_url().'event/detail/'.$event['event_id'] ?>"><?php echo $event['event_title']; ?></a></h3>
                                                        <ul class="loaction-tags">
                                                            <li><i class="fa fa-map-marker"></i><?php echo $event['event_place']; ?></li>
                                                            <li><i class="fa fa-clock-o"></i><?php echo date($event['event_date_start']); ?> To <?php echo date($event['event_date_end']); ?></li>
                                                        </ul>
                                                        <p> <?php echo character_limiter($event['event_desc'], 50); ?> </p>

                                                    </div>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Events Post -->
                                <?php }else{ ?>
                                    <!-- Events Post -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 r-full-width">
                                        <div class="post-holder">
                                            <div class="row no-gutters">

                                                <!-- Post Img -->
                                                <div class="col-lg-6 col-xs-12 r-full-width">
                                                    <figure class="post-img">
                                                        <img src="<?= base_url() ?>/cms/<?php echo $event['event_pict']; ?>" alt="img-02">
                                                    </figure>
                                                </div>
                                                <!-- Post Img -->

                                                <!-- Post Detail -->
                                                <div class="col-lg-6 col-xs-12 r-full-width">
                                                    <div class="post-detail">
                                                        <h3><a href="<?php echo base_url().'event/detail/'.$event['event_id'] ?>"><?php echo $event['event_title']; ?></a></h3>
                                                        <ul class="loaction-tags">
                                                            <li><i class="fa fa-map-marker"></i><?php echo $event['event_place']; ?></li>
                                                            <li><i class="fa fa-clock-o"></i><?php echo date($event['event_date_start']); ?> To <?php echo date($event['event_date_end']); ?></li>
                                                        </ul>
                                                        <p> <?php echo character_limiter($event['event_desc'], 50); ?> </p>
                                                    </div>
                                                </div>
                                                <!-- Post Detail -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Events Post -->
                                <?php } ?>
                        <?php } ?>


                    </div>
                </div>
                <!-- Upcoming Events Slider -->

            </div>
        </section>
        <!-- Upcoming Events -->

        <!-- Team Section -->
        <section class="team-holder section-padding-top white-bg">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Our <strong>School</strong> Team</h2>
                        <p>Kami Mempunyai Tenaga Kerja Ahli serta Berpengalaman di bidangnya.
                        <span>Agar peserta didik nyaman, mudah mengerti, dan mudah menguasai materi yang diberikan.</span></p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Team Slider -->
                <div id="team-slider" class="team-slider">

                    <!-- Team Figure -->
                    <div class="item">
                        <figure class="team-figure">
                            <img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01">
                            <figcaption class="employee-detail">
                                <div class="tc-display-table">
                                    <div class="tc-display-table-cell">
                                        <div class="employee-desination">
                                            <h5><a href="#">brenda shon</a></h5>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Team Figure -->

                    <!-- Team Figure -->
                    <div class="item">
                        <figure class="team-figure">
                            <img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01">
                            <figcaption class="employee-detail">
                                <div class="tc-display-table">
                                    <div class="tc-display-table-cell">
                                        <div class="employee-desination">
                                            <h5><a href="#">brenda shon</a></h5>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Team Figure -->

                    <!-- Team Figure -->
                    <div class="item">
                        <figure class="team-figure">
                            <img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01">
                            <figcaption class="employee-detail">
                                <div class="tc-display-table">
                                    <div class="tc-display-table-cell">
                                        <div class="employee-desination">
                                            <h5><a href="#">brenda shon</a></h5>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Team Figure -->

                    <!-- Team Figure -->
                    <div class="item">
                        <figure class="team-figure">
                            <img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01">
                            <figcaption class="employee-detail">
                                <div class="tc-display-table">
                                    <div class="tc-display-table-cell">
                                        <div class="employee-desination">
                                            <h5><a href="#">brenda shon</a></h5>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Team Figure -->

                    <!-- Team Figure -->
                    <div class="item">
                        <figure class="team-figure">
                            <img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01">
                            <figcaption class="employee-detail">
                                <div class="tc-display-table">
                                    <div class="tc-display-table-cell">
                                        <div class="employee-desination">
                                            <h5><a href="#">brenda shon</a></h5>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Team Figure -->

                    <!-- Team Figure -->
                    <div class="item">
                        <figure class="team-figure">
                            <img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01">
                            <figcaption class="employee-detail">
                                <div class="tc-display-table">
                                    <div class="tc-display-table-cell">
                                        <div class="employee-desination">
                                            <h5><a href="#">brenda shon</a></h5>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Team Figure -->

                </div>
                <!-- Team Slider -->

            </div>
        </section>
        <!-- Team Section -->

        <!-- Counters -->
        <!-- <section class="parallax-window section-padding overlay-pink" data-parallax="scroll" data-image-src="images/counter-bg.jpg">
            <div class="container">
                <div id="tc-counters" class="tc-counters">
                    <div class="tc-counter">
                        <strong>12</strong><small>asdasd</small>
                        <div class="tc-border-topcenter">
                            <p>total students</p>
                        </div>
                    </div>
                    <div class="tc-counter">
                        <strong></strong>
                        <div class="tc-border-topcenter">
                            <h5>win awards</h5>
                        </div>
                    </div>
                    <div class="tc-counter">
                        <strong>  </strong>
                        <div class="tc-border-topcenter">
                            <h5>total teachers</h5>
                        </div>
                    </div>
                    <div class="tc-counter">
                        <strong id="odometer4" class="odometer"></strong>
                        <div class="tc-border-topcenter">
                            <h5>total event</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- counters -->

        <!-- <section class="section-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="kotak-counter">
                            <h2>2000</h2>
                        </div>
                        <div class="kotak-desc">
                            <h4>STUDENTS</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kotak-counter">
                            <h2>1000</h2>
                        </div>
                        <div class="kotak-desc">
                            <h4>WIN AWARDS</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kotak-counter">
                            <h2>150</h2>
                        </div>
                        <div class="kotak-desc">
                            <h4>TOTAL TEACHERS</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kotak-counter">
                            <h2>150</h2>
                        </div>
                        <div class="kotak-desc">
                            <h4>TOTAL EVENT</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

        <!-- Gallery Section -->
        <!--section class="gallery-holder white-bg">

            < Main Heading >
            <div class="main-heading-holder section-padding-top">
                <div class="main-heading">
                    <h2>School <strong>Products</strong><span>our best services for your children</span></h2>
                </div>
                < Filter Tags List >
                <div class="filter-tags-holder">
                    <ul id="tg-filterbale-nav" class="option-set">
                        <li><a class="selected" data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".tkj" href="#">Teknik Komputer & Jaringan</a></li>
                        <li><a data-filter=".mm" href="#">Multimedia</a></li>
                        <li><a data-filter=".ap" href="#">Administrasi Perkantoran</a></li>
                        <li><a data-filter=".ak" href="#">Akuntansi</a></li>
                        <li><a data-filter=".pm" href="#">Pemasaran</a></li>
                        <li><a data-filter="*" href="#">Others</a></li>
                    </ul>
                </div>
                < Filter Tags List >
            </div>
            < Main Heading >

            < Gallery Grid >
            <div class="container">
                <div class="row">
                    <div id="filter-masonry" class="gallery-masonry section-padding-top">
                        <div class="masonry-grid col-sm-6 col-xs-6 ap r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/gallery/img-01.jpg" alt="img-01">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/gallery/img-01.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-6 col-xs-6 tkj r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/satria/SMK-Prima-1.jpg" alt="img-02">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/satria/SMK-Prima-1.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-4 col-xs-6 mm r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/gallery/img-03.jpg" alt="img-03">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/gallery/img-03.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-4 col-xs-6 tkj r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/satria/SMK-Prima-2.jpg" alt="img-04">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/satria/SMK-Prima-2.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-4 col-xs-6 ap r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/satria/SMK-Prima-3.jpg" alt="img-05">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/satria/SMK-Prima-3.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-6 col-xs-6 pm r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/gallery/img-01.jpg" alt="img-01">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/gallery/img-01.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-6 col-xs-6 pm r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/satria/no-images.jpeg" alt="img-01">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/satria/no-images.jpeg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-6 col-xs-6 ak r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/gallery/img-01.jpg" alt="img-01">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/gallery/img-01.jpg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="masonry-grid col-sm-6 col-xs-6 ak r-full-width">
                            <figure class="gallery-figure">
                                <img src="images/satria/no-images.jpeg" alt="img-01">
                                <figcaption class="gallery-hover">
                                    <div class="tc-display-table">
                                        <div class="tc-display-table-cell">
                                            <a class="fa fa-search" href="images/satria/no-images.jpeg" data-rel="prettyPhoto[gallery]"></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    < <div class="view-all-btn">
                        <a class="pink-btn" href="#">view all</a>
                    </div>>
                </div>
            </div>
            <!-- Gallery Grid -->

        </section>
        <!-- Gallery Section -->

        <!-- Video Section -->
        <section class="parallax-window video-section overlay-dark" data-parallax="scroll" data-image-src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg">
            <div class="video-title-holder">
                <div class="video-titel">
                    <div class="youtube" id="fa7JNfD3NZY">
                        <div class="position-center-center">
                            <i class="play-btn fa fa-play"></i>
                            <h3>School Classroom Video</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-holder section-padding white-bg">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Parents <strong>Testimonials</strong></h2>
                        </p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Testimonial Slider -->
                <div id="testimonial-slider" class="testimonial-slider">

                    <!-- Testimonial column -->
                    <div class="item">
                        <div class="testimonial-column">
                            <div class="testimonial-blockquote-holder">
                                <blockquote class="testimonial-blockquote">
                                    <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat viverra. Ut dictum turpis in ipsum sagittis finibus.</p>
                                </blockquote>
                                <span class="client-name">Wll Smith</span>
                            </div>
                            <div class="client-img">
                                <img src="<?= base_url() ?>assets/satria/images/client-img/img-01.jpg" alt="img-01">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial column -->

                    <!-- Testimonial column -->
                    <div class="item">
                        <div class="testimonial-column">
                            <div class="testimonial-blockquote-holder">
                                <blockquote class="testimonial-blockquote">
                                    <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat viverra. Ut dictum turpis in ipsum sagittis finibus.</p>
                                </blockquote>
                                <span class="client-name">Wll Smith</span>
                            </div>
                            <div class="client-img">
                                <img src="<?= base_url() ?>assets/satria/images/client-img/img-01.jpg" alt="img-01">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial column -->

                    <!-- Testimonial column -->
                    <div class="item">
                        <div class="testimonial-column">
                            <div class="testimonial-blockquote-holder">
                                <blockquote class="testimonial-blockquote">
                                    <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat viverra. Ut dictum turpis in ipsum sagittis finibus.</p>
                                </blockquote>
                                <span class="client-name">Wll Smith</span>
                            </div>
                            <div class="client-img">
                                <img src="<?= base_url() ?>assets/satria/images/client-img/img-01.jpg" alt="img-01">
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial column -->

                </div>
                <!-- Testimonial Slider -->

            </div>
        </section>
        <!-- Testimonial Section -->

    </main>
    <!-- Main Content -->
