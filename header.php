<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
    $logo = !empty($optionTheme['awe_header_logo']) ? $optionTheme['awe_header_logo'] : '';
?>
<!DOCTYPE html>
<!-- saved from url=(0048)/index.html -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- metas -->

    <meta name="author" content="Website Design Templates">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="IT Solutions and Services HTML Template">
    <meta name="description" content="Solutic - IT Solutions and Services HTML Template">

    <!-- title  -->
    <title>Solutic - IT Solutions and Services HTML Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/images/logos/favicon.png'?>">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/images/logos/apple-touch-icon-57x57.png'?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/assets/images/logos/apple-touch-icon-72x72.png'?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/assets/images/logos/apple-touch-icon-114x114.png'?>">

    <!-- plugins -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/plugins.css'?>">

    <!-- search css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/search/search.css'?>">

    <!-- quform css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/quform/css/base.css'?>">

    <!-- theme core css -->
    <link href="<?php echo get_template_directory_uri() . '/assets/css/styles.css'?>" rel="stylesheet">

    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- <script type="text/javascript" id="www-widgetapi-script"
        src="./Solutic - IT Solutions and Services HTML Template_files/www-widgetapi.js.download" async=""></script> -->
    <script src="<?php echo get_template_directory_uri() . '/assets/css/iframe_api'?>"></script>
    <style type="text/css" id="jarallax-clip-0">
        #jarallax-container-0 {
            clip: rect(0 1903px 499.171875px 0);
            clip: rect(0, 1903px, 499.171875px, 0);
        }
    </style>
</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->


    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="header-style2">
            <div id="logo-js" data-logo="<?php echo $logo?>"></div>
            <div class="navbar-default border-bottom border-color-light-white">

                <!-- start top search -->
                <div class="top-search bg-primary">
                    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                        <form class="search-form" action="/search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                                    placeholder="Type &amp; hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0 current">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="<?php home_url()?>" class="navbar-brand logodefault">
                                        <img id="logo" src="<?php echo $logo ?>" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-primary"></div>

                                    <!-- start menu area -->
                                    <?php
                                        wp_nav_menu(
                                            [
                                                'theme_location' => 'awe-header-menu',
                                                'walker'         => new CustomPrimaryMenuWalker(),
                                                'container'            => '',
                                                'items_wrap'     => '<ul class="navbar-nav ms-auto itsa-nav" id="nav">%3$s</ul>',
                                            ]
                                        );
                                    ?>
                                    <!-- <ul class="navbar-nav ms-auto" id="nav" style="">
                                        <li class="current"> <a href="/">Home</a></li>
                                        <li><a href="/about-us.html">About Us</a>
                                        <li><a href="/about-us.html">Our Team</a>
                                        <li><a href="/services.html">Our Services</a></li>
                                    </ul> -->
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>
                                            <!-- <li class="search"><a href="/index.html"><i class="fas fa-search"></i></a>
                                            </li> -->
                                            <li class="d-none d-xl-inline-block">
                                                <a href="<?php ?>"
                                                    class="btn-style1 medium"><span>Contact Us</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>