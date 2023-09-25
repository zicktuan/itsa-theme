<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
    $logo = !empty($optionTheme['awe_header_logo']) ? $optionTheme['awe_header_logo'] : '';
    $fb = !empty($optionTheme['awe_social_fb']) ? $optionTheme['awe_social_fb'] : '';
    $ig = !empty($optionTheme['awe_social_ins']) ? $optionTheme['awe_social_ins'] : '';
    $tw = !empty($optionTheme['awe_social_twitter']) ? $optionTheme['awe_social_twitter'] : '';
?>
<!DOCTYPE html>
<!-- saved from url=(0042)https://demo-storage.com/pm/html/restbeef/ -->
<html lang="en">
<head>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('title')?></title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.png'?>">

    <?php wp_head() ?>

</head>
<?php global $wp_query; ?>
<body>
    <div class="main-wrapper">
    <?php
        $pageId = get_the_ID();
        $bannerPage = get_post_meta($pageId, 'awe_banner_page', true);
    ?>

        <!-- Preloader start -->
        <div id="preloader" style="display: none;">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div id="header" class="section header-section header-section-05 sticky">

            <div class="container">

                <!-- Header Wrap Start  -->
                <div class="header-wrap">

                    <div class="header-logo">
                        <a href="<?php echo home_url() ?>"><img src="<?php echo $logo ?>" alt=""></a>
                    </div>

                    <div class="header-menu d-none d-lg-block">
                            <?php
                            wp_nav_menu(
                                [
                                    'theme_location' => 'awe-header-menu',
                                    'walker'         => new CustomPrimaryMenuWalker(),
                                    'container' => 'ul',
                                    'menu_class' => 'main-menu',
                                    // 'menu_id' => 'menu-main-menu',
                                ]
                            );
                            ?>
                    </div>

                    <!-- Header Meta Start -->
                    <div class="header-meta">
                        <!-- Header Social Start -->
                        <div class="header-social">
                            <ul>
                                <?php echo ($fb) ? '<li><a href="'.$fb.'"><i class="fab fa-facebook-f"></i></a></li>' : ''?>
                                <?php echo ($ig) ? '<li><a href="'.$ig.'"><i class="fab fa-twitter"></i></a></li>' : ''?>
                                <?php echo ($tw) ? '<li><a href="'.$tw.'"><i class="fab fa-linkedin-in"></i></a></li>' : ''?>
                            </ul>
                        </div>

                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <!-- Header Meta End  -->

                </div>
                <!-- Header Wrap End  -->

            </div>
        </div>
        <!-- Header End -->

        <!-- Offcanvas Start-->
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.png'?>" alt="">
                </a>
            </div>
            <!-- Offcanvas Logo End -->
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
        </div>

        <!-- Offcanvas Body Start -->
        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'awe-header-menu',
                        'walker'         => new CustomPrimaryMenuWalker(),
                        'container' => 'ul',
                        'menu_class' => 'main-menu',
                        // 'menu_id' => 'menu-main-menu',
                    ]
                );
                ?>
            </div>
        </div>
        <!-- Offcanvas Body End -->
    </div>
    <!-- Offcanvas End -->