<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link rel="icon" type="image/png" href="<?= base_url().getConfig()['favicon'] ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= base_url().getConfig()['favicon'] ?>" sizes="32x32">

    <title>Yayasan Satria</title>

    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/weather-icons/css/weather-icons.min.css" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/metrics-graphics/dist/metricsgraphics.css">
    <!-- chartist -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/chartist/dist/chartist.min.css">

    <!-- kendo UI -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/kendo-ui/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/kendo-ui/styles/kendo.material.min.css"/>    
    
    <!-- JQuery-UI -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>skins/jquery-ui/material/jquery-ui.min.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- jTable -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>skins/jtable/jtable.min.css">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>icons/flags/flags.min.css" media="all">

    <!-- main css -->
    <link rel="stylesheet" href="<?= config_item('assets_css') ?>main.min.css" media="all">
    
    <!-- common functions -->
    <script src="<?= config_item('assets_js') ?>common.min.js"></script> 

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>
<body app-url="<?= base_url() ?>" class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">

                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>

                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="<?= base_url().$this->session->userdata('sys_administrator_image') ?>" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="<?= base_url('app_myaccount/editProfile') ?>">My profile</a></li>
                                    <li><a href="<?= base_url('app_login').'/logout' ?>">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">

        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="<?= base_url('app_dashboard') ?>" class="sSidebar_hide"><img src="<?= base_url().getConfig()['file'] ?>" alt="" height="15" width="71"/></a>
                <a href="<?= base_url('app_dashboard') ?>" class="sSidebar_show"><img src="<?= base_url().getConfig()['file'] ?>" alt="" height="32" width="32"/></a>
            </div>
        </div>

        <div class="menu_section">
            <ul>
                <li class="<?php if($this->uri->segment(1)==" app_dashboard "){echo "current_section ";}?>" title="Dashboard">
                    <a href="<?= base_url('app_dashboard') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_about "){echo "current_section ";}?>" title="About">
                    <a href="<?= base_url('app_about') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE167;</i></span>
                        <span class="menu_title">About</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_event "){echo "current_section ";}?>" title="Event">
                    <a href="<?= base_url('app_event') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE878;</i></span>
                        <span class="menu_title">Events</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_jadwal "){echo "current_section ";}?>" title="Jadwal">
                    <a href="<?= base_url('app_jadwal') ?>">
                        <span class="menu_icon"><i class="material-icons">event_note</i></span>
                        <span class="menu_title">Jadwal</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_kalender "){echo "current_section ";}?>" title="Kalender Akademik">
                    <a href="<?= base_url('app_kalender') ?>">
                        <span class="menu_icon"><i class="material-icons">date_range</i></span>
                        <span class="menu_title">Kalender Akademik</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_struktur "){echo "current_section ";}?>" title="Struktur Organisasi">
                    <a href="<?= base_url('app_struktur') ?>">
                        <span class="menu_icon"><i class="material-icons">device_hub</i></span>
                        <span class="menu_title">Struktur Organisasi</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_silabus "){echo "current_section ";}?>" title="Silabus">
                    <a href="<?= base_url('app_silabus') ?>">
                        <span class="menu_icon"><i class="material-icons">assignment_turned_in</i></span>
                        <span class="menu_title">Silabus</span>
                    </a>
                </li>
                <!-- <li class="<?php if($this->uri->segment(1)==" app_materi "){echo "current_section ";}?>" title="Materi Ajar">
                    <a href="<?= base_url('app_materi') ?>">
                        <span class="menu_icon"><i class="material-icons">chrome_reader_mode</i></span>
                        <span class="menu_title">Materi Ajar</span>
                    </a>
                </li> -->
                <li class="<?php if($this->uri->segment(1)==" app_lowongan "){echo "current_section ";}?>" title="Informasi">
                    <a href="<?= base_url('app_lowongan') ?>">
                        <span class="menu_icon"><i class="material-icons">info</i></span>
                        <span class="menu_title">Informasi Sekolah</span>
                    </a>
                </li><li class="<?php if($this->uri->segment(1)==" app_gallery "){echo "current_section ";}?>" title="Gallery">
                    <a href="<?= base_url('app_gallery') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE413;</i></span>
                        <span class="menu_title">Gallery</span>
                    </a>
                </li>
                <!-- <li class="<?php if($this->uri->segment(1)==" app_merchant "){echo "current_section ";}?>" title="Merchants">
                    <a href="<?= base_url('app_merchant') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xEB3F;</i></span>
                        <span class="menu_title">Merchant</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_shop "){echo "current_section ";}?>" title="Shop">
                    <a href="<?= base_url('app_shop') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE8CA;</i></span>
                        <span class="menu_title">Shop</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)==" app_ads "){echo "current_section ";}?>" title="Ads">
                    <a href="<?= base_url('app_ads') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87F;</i></span>
                        <span class="menu_title">Ads</span>
                    </a>
                </li> -->
                <!-- <li class="<?php if($this->uri->segment(1)==" app_manageuser "){echo "current_section ";}?>" title="Manage User">
                    <a href="<?= base_url('app_manageuser') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Manage User</span>
                    </a>
                </li> -->
                <!-- <li class="<?php if($this->uri->segment(1)==" rep_message "){echo "current_section ";}?>" title="Contact Messae">
                    <a href="<?= base_url('rep_message') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87F;</i></span>
                        <span class="menu_title">Contact Message</span>
                    </a>
                </li>  -->               
                <li class="<?php if($this->uri->segment(1)==" app_websetup "){echo "current_section ";}?>" title="Settings">
                    <a href="<?= base_url('app_websetup') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE8B9;</i></span>
                        <span class="menu_title">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- main sidebar end -->
    <div id="page_content">
        <div id="top_bar">
            <ul id="breadcrumbs">
                <li><a href="<?= base_url('app_dashboard') ?>">Home</a></li>
                <?php if( $this->uri->segment(1) == 'app_event' ):?>
                    <li><span>Event</span></li>
                <?php elseif( $this->uri->segment(1) == 'app_about' ):?>
                    <li><span>About</span></li>
                <?php elseif( $this->uri->segment(1) == 'app_gallery' ):?>
                    <li><span>Gallery</span></li>
                <?php elseif( $this->uri->segment(1) == 'app_membership' ):?>
                    <li><span>Membership</span></li>
                <!-- <?php elseif( $this->uri->segment(1) == 'app_merchant' ):?>
                    <li><span>Merchant</span></li>
                <?php elseif( $this->uri->segment(1) == 'app_shop' ):?>
                    <li><span>Shop</span></li>
                <?php elseif( $this->uri->segment(1) == 'app_ads' ):?>
                    <li><span>Ads</span></li> -->
                <?php elseif( $this->uri->segment(1) == 'app_manageuser' ):?>
                    <li><span>Manage Users</span></li>
               <!--  <?php elseif( $this->uri->segment(1) == 'rep_message' ):?>
                    <li><span>Contact Message</span></li>  -->                                               
                <?php elseif( $this->uri->segment(1) == 'app_websetup' ):?>
                    <li><span>Settings</span></li>
                <?php elseif( $this->uri->segment(1) == 'app_myaccount' && $this->uri->segment(2) == 'editProfile' ):?>
                    <li><a href="#">My Account</a></li>
                    <li><span>Edit Profile</span></li>
                <?php else: ?>
                <?= showBreadCrumb($this->uri->segment(1), $this->uri->segment(2)) ?>
                <?php endif; ?>
            </ul>
        </div>

        <div id="page_content_inner">
            <?= $contents; ?>
        </div>
    </div>



    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>


    <!-- uikit functions -->
    <script src="<?= config_item('assets_js') ?>uikit_custom.min.js"></script>
    <!-- common functions/helpers -->
    <script src="<?= config_item('assets_js') ?>altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="<?= config_item('assets') ?>bower_components/d3/d3.min.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="<?= config_item('assets') ?>bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
    <!-- chartist (charts) -->
    <script src="<?= config_item('assets') ?>bower_components/chartist/dist/chartist.min.js"></script>
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?= config_item('assets') ?>bower_components/maplace-js/dist/maplace.min.js"></script>
    <!-- peity (small charts) -->
    <script src="<?= config_item('assets') ?>bower_components/peity/jquery.peity.min.js"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="<?= config_item('assets') ?>bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- countUp -->
    <script src="<?= config_item('assets') ?>bower_components/countUp.js/countUp.min.js"></script>
    <!-- handlebars.js -->
    <script src="<?= config_item('assets') ?>bower_components/handlebars/handlebars.min.js"></script>
    <script src="<?= config_item('assets_js') ?>custom/handlebars_helpers.min.js"></script>
    <!-- CLNDR -->
    <script src="<?= config_item('assets') ?>bower_components/clndr/src/clndr.js"></script>
    <!-- fitvids -->
    <script src="<?= config_item('assets') ?>bower_components/fitvids/jquery.fitvids.js"></script>

    <!--  dashbord functions -->
    <script src="<?= config_item('assets_js') ?>pages/dashboard.min.js"></script>
    
    <!-- tinymce -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


    <script>
        $(function () {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if (Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-65191727-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        $(function () {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $body = $('body');


            $switcher_toggle.click(function (e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function (e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $body
                    .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i')
                    .addClass(this_theme);

                if (this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                }

            });

            // hide style switcher
            $document.on('click keyup', function (e) {
                if ($switcher.hasClass('switcher_active')) {
                    if (
                        (!$(e.target).closest($switcher).length) || (e.keyCode == 27)
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if (localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme=' + localStorage.getItem("altair_theme") + ']').click();
            }


            // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if ((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function (event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    location.reload(true);
                })
                .on('ifUnchecked', function (event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });


            // toggle boxed layout

            if ((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function (event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function (event) {
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

            // main menu accordion mode
            if ($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function () {
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function () {
                    $sidebar_main.removeClass('accordion_mode');
                });

            tinymce.init({
      selector: 'textarea',
      height: 500,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
      ],
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      content_css: [
        '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
        '//www.tinymce.com/css/codepen.min.css'
      ]
    });
        });
    </script>
</body>

</html>