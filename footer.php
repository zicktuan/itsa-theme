<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
    $logo = !empty($optionTheme['awe_footer_logo']) ? $optionTheme['awe_footer_logo'] : '';
    $phone = !empty($optionTheme['awe_phone_online']) ? $optionTheme['awe_phone_online'] : '';
    $mail = !empty($optionTheme['awe_mail_company']) ? $optionTheme['awe_mail_company'] : '';
    $address = !empty($optionTheme['awe_phone_address']) ? $optionTheme['awe_phone_address'] : '';
    $coppyRight = !empty($optionTheme['awe_footer_copyright']) ? $optionTheme['awe_footer_copyright'] : '';
    
    
?>
<footer class="position-relative pt-0">
        <div class="bg-primary py-1-9 mb-6 mb-xxl-10">
            <div class="container">
                <div class="row mt-n1-9 align-items-center">
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms"
                        style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/07.png'?>" alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-0 text-white">Contact Us</p>
                                <h3 class="mb-0 h5 text-white"><?php echo $phone ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 text-start text-lg-center wow fadeIn">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="<?php echo $logo ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="600ms"
                        style="visibility: hidden; animation-delay: 600ms; animation-name: none;">
                        <div class="d-flex align-items-center text-lg-end">
                            <div class="flex-grow-1 ms-3 ms-lg-0 me-lg-3 order-2 order-lg-1">
                                <p class="mb-0 text-white">Mail Us</p>
                                <h3 class="mb-0 h5 text-white"><?php echo $mail ?></h3>
                            </div>
                            <div class="flex-shrink-0 order-1 order-lg-2">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons//08.png'?>" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-n5 pb-6 pb-xxl-10">
                <div class="col-md-6 col-lg-5 mt-5 wow fadeIn" data-wow-delay="200ms"
                    style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                    <h3 class="text-white h5 mb-1-9">About Company</h3>
                    <h4 class="text-white mb-1-9 fw-light w-75 display-27 lh-base opacity8">
                        We have 14+ years
                        experience. Helping you overcome technology challenges.</h4>
                    <ul class="social-icon-style1">
                        <?php if ($optionTheme['awe_social_fb']):?>
                        <li><a href="<?php echo $optionTheme['awe_social_fb']?>"><i class="fab fa-facebook-f"></i></a></li>
                        <?php endif ?>
                        <?php if ($optionTheme['awe_social_twitter']):?>
                        <li><a href="<?php echo $optionTheme['awe_social_twitter']?>"><i class="fab fa-twitter"></i></a></li>
                        <?php endif ?>
                        <?php if ($optionTheme['awe_social_you']):?>
                        <li><a href="<?php echo $optionTheme['awe_social_you']?>"><i class="fab fa-youtube"></i></a></li>
                        <?php endif ?>
                        <?php if ($optionTheme['awe_social_linkedin']):?>
                        <li><a href="<?php echo $optionTheme['awe_social_linkedin']?>"><i class="fab fa-linkedin-in"></i></a></li>
                        <?php endif ?>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mt-5 wow fadeIn" data-wow-delay="400ms"
                    style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                    <div class="ps-0">
                        <h3 class="text-white h5 mb-1-9">Contacts</h3>
                        <ul class="footer-link mb-0 list-unstyled">
                            <li class="text-white mb-3">
                                <strong>Adress:</strong> <span class="opacity8"><?php echo $address?></span>
                            </li>
                            <li class="text-white mb-3">
                                <strong>Email:</strong> <span class="opacity8"><?php echo $mail?></span>
                            </li>
                            <li class="text-white">
                                <strong>Phone:</strong> <span class="opacity8"><?php echo $phone?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-5 offset-lg-1 wow fadeIn" data-wow-delay="600ms"
                    style="visibility: hidden; animation-delay: 600ms; animation-name: none;">
                    <div class="ps-xl-4">
                        <h3 class="text-white h5 mb-1-9">Newsletter</h3>
                        <p class="text-white opacity8 mb-3">Subscribe to our newsletter to receive updates on the
                            latest news!</p>
                        <form class="quform newsletter-form" action="/quform/newsletter-two.php" method="post"
                            enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">
                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="quform-element mb-0">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text"
                                                    name="email_address" placeholder="Subscribe with us">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="btn btn-white text-white m-0" type="submit"><i
                                                    class="fas fa-paper-plane"></i></button>
                                        </div>
                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 border-top border-color-light-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center wow fadeIn" data-wow-delay="100ms"
                        style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                        <p class="d-inline-block text-white mb-0"><?php echo $coppyRight ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
    

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="/index.html" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js'?>"></script>

    <!-- popper js -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/popper.min.js'?>"></script>

    <!-- bootstrap -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.min.js'?>"></script>

    <!-- jquery -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/core.min.js'?>"></script>

    <!-- Search -->
    <script src="<?php echo get_template_directory_uri() . '/assets/search/search.js'?>"></script>

    <!-- custom scripts -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'?>"></script>

    <!-- form plugins js -->
    <script src="<?php echo get_template_directory_uri() . '/assets/quform/js/plugins.js'?>"></script>

    <!-- form scripts js -->
    <script src="<?php echo get_template_directory_uri() . '/assets/quform/js/scripts.js'?>"></script>

    <!-- all js include end -->



</body>

</html>