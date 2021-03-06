
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />

        <!-- Stylesheets
        ============================================= -->
        <link href="//fonts.googleapis.com/css?family=Lato:300,400,700|Arimo:400,700|Playfair+Display:400,400i,700|Cookie" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/dark.css" type="text/css" />

        <!-- spa Demo Specific Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/style/fab/spa.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/style/fab/css/fonts/spa-icons.css" type="text/css" />
        <!-- / -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="href="<?php echo base_url(); ?>assets/theme2/style/fab/css/fonts.css" type="text/css" />

              <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/colors.php?color=78c9d1" type="text/css" />

        <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/custom.css">
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <!-- Document Title
        
        ============================================= -->
        <?php
        meta_tags();
        ?>


        <?php
        $this->load->view('layout/whatappwidget');
        ?>
        <style>

            .tp-caption.Fashion-SmallText, .Fashion-SmallText,
            .tp-caption.Fashion-TextBlock, .Fashion-TextBlock {
                font-family: 'Lato';
                color: #FFF;
            }

            .tp-caption.Fashion-BigDisplay, .Fashion-BigDisplay {
                font-family: 'Cookie';
                letter-spacing: 1px;
                font-weight: 700;
                color: #FFF;
                text-transform: capitalize;
            }

            .restaurant-reviews .flex-control-nav {
                top: auto;
                bottom: 25px;
            }
        </style>

    </head>

    <body class="stretched" data-loader-color="#103e4d">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix" style='    background: black;'>

            <!-- Header
            ============================================= -->
            <header id="header" class="no-sticky transparent-header dark" data-responsive-class="dark">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="" class="standard-logo"><img src="<?php echo base_url(); ?>assets/theme2/images/logo.png" alt="Logo"></a>
                            <a href="" class="retina-logo"><img src="<?php echo base_url(); ?>assets/theme2/images/logo.png" alt=" Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="not-dark">

                            <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="0">
                                <li class="current"><a href="<?php echo site_url("/"); ?>" ><div>Home</div></a></li>
                                <li><a href="<?php echo site_url("Product/ProductList/2/0/suits"); ?>" ><div>Suits</div></a></li>
                                <li><a href="<?php echo site_url("Product/ProductList/4/0/linings"); ?>"><div>Linings </div></a></li>
                                <li><a href="#" data-href="#section-about"><div>About</div></a></li>
                                <li><a href="<?php echo site_url("Shop/contactus"); ?>" ><div>Contact</div></a></li>
                            </ul>

                        </nav>

                    </div>

                </div>

            </header><!-- #header end -->
            <body ng-app="App">





                <script>


                    var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                        //$interpolateProvider.startSymbol('{$');
                        //$interpolateProvider.endSymbol('$}');
                        $httpProvider.defaults.headers.common = {};
                        $httpProvider.defaults.headers.post = {};
                    });
                    var baseurl = "<?php echo site_url(); ?>";
                    var imageurlg = "<?php echo imageserver; ?>";
                    var globlecurrency = "<?php echo globle_currency; ?>";
                    var avaiblecredits = 0;</script>

                <style>
                    .ownmenu .dropdown.megamenu .dropdown-menu li:last-child{
                        margin-bottom: 20px;
                    }

                    .ownmenu .dropdown.megamenu .dropdown-menu li a{
                        line-height: 25px;
                    }

                    .linkheader .social-links a {
                        border: 1px solid;
                        padding: 0px;
                        margin-left: 10px;
                        float: left;
                        width: 25px;
                        text-align: center;
                        color: white;
                    }

                </style>

                <section id="content">

                    <div class="content-wrap notoppadding">