<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
    $logo = !empty($optionTheme['awe_footer_logo']) ? $optionTheme['awe_footer_logo'] : '';
    $slogan = !empty($optionTheme['awe_footer_slogan']) ? $optionTheme['awe_footer_slogan'] : '';
    $copyRight =!empty($optionTheme['awe_footer_copyright']) ? $optionTheme['awe_footer_copyright'] : '';
    $fb = !empty($optionTheme['awe_social_fb']) ? $optionTheme['awe_social_fb'] : '';
    $ig = !empty($optionTheme['awe_social_ins']) ? $optionTheme['awe_social_ins'] : '';
    $tw = !empty($optionTheme['awe_social_twitter']) ? $optionTheme['awe_social_twitter'] : '';
    
?>
<!-- Footer Section Start -->
            <div class="section footer-section footer-section-03" style="background-image: <?php echo get_template_directory_uri() . '/assets/images/bg/footer-bg.jpeg'?>;">

                <div class="container">
                    <!-- Footer Widget Wrap Start -->
                    <div class="footer-widget-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <!-- Footer Widget Start -->
                                <div class="footer-widget-about">
                                    <a class="footer-logo" href="<?php home_url() ?>">
                                        <img src="<?php echo $logo ?>" alt="Logo">
                                    </a>
                                    <p><?php echo $slogan ?></p>
                                    <div class="footer-social">
                                        <ul class="social">
                                            <?php echo ($fb) ? '<li><a href="'.$fb.'"><i class="fab fa-facebook-f"></i></a></li>' : ''?>
                                            <?php echo ($ig) ? '<li><a href="'.$ig.'"><i class="fab fa-twitter"></i></a></li>' : ''?>
                                            <?php echo ($tw) ? '<li><a href="'.$tw.'"><i class="fab fa-linkedin-in"></i></a></li>' : ''?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Widget End -->
                            </div>
                            <!-- <div class="col-lg-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Useful Links</h4>

                                    <div class="widget-link">
                                        <ul class="link">
                                            <li><a href="https://thepixelcurve.com/html/techwix/techwix/index-2.html#">Terms &amp; Conditions</a></li>
                                            <li><a href="https://thepixelcurve.com/html/techwix/techwix/index-2.html#">About Company</a></li>
                                            <li><a href="https://thepixelcurve.com/html/techwix/techwix/index-2.html#">Payment Gatway</a></li>
                                            <li><a href="https://thepixelcurve.com/html/techwix/techwix/index-2.html#">Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-3 col-sm-6">
                                <?php
                                    if (is_active_sidebar('awe-footer-service-area')) {
                                        dynamic_sidebar('awe-footer-service-area');
                                    }
                                ?>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <?php
                                    if (is_active_sidebar('awe-footer-address-area')) {
                                        dynamic_sidebar('awe-footer-address-area');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Wrap End -->
                </div>

                <!-- Footer Copyright Start -->
                <div class="footer-copyright-area">
                    <div class="container">
                        <div class="footer-copyright-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <!-- Footer Copyright Text Start -->
                                    <div class="copyright-text text-center">
                                        <p><?php echo $copyRight ?></p>
                                    </div>
                                    <!-- Footer Copyright Text End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyright End -->
            </div>
            <!-- Footer Section End -->

            <!-- back to top start -->
            <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 260.962;"></path>
            </svg>
        </div>
        <!-- back to top end -->

    </div>

    <?php wp_footer() ?>

    </body>
</html>