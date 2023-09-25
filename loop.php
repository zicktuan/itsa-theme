<?php
global $myplugin;
$optionTheme  = $myplugin->themeSettings->getSettings();
$styleBlog = !empty($optionTheme['awe_config_style_blog']) ? $optionTheme['awe_config_style_blog'] : '0';
$showBlog = !empty($optionTheme['awe_config_show_blog']) ? $optionTheme['awe_config_show_blog'] : '0';
?>
<?php get_template_part('banner', 'blog') ?>
<?php if( 0 == $styleBlog): ?>
    <div class="section blog-standard-section section-padding-02">
        <div class="container">
            <div class="blog-standard-wrap">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog-post-wrap">
                            <?php get_template_part('blog', 'list') ?>
                            <div class="techwix-pagination">
                                <ul class="pagination justify-content-center">
                                    <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html">1</a></li>
                                    <li><a class="active" href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html">2</a></li>
                                    <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="blog-sidebar">
                            <?php //dynamic_sidebar('blog-sidebar-area'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('info', 'blog') ?>
<?php else: ?>
    <div class="section techwix-blog-grid-section section-padding">
        <div class="container">
            <div class="techwix-blog-grid-wrap">
                <div class="row">
                    <?php get_template_part('blog', 'grid') ?>
                </div>
                
                    <?php //echo HelpersFunction::awePagination(2) ?>
                    <!-- <ul class="pagination justify-content-center">
                        <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html">1</a></li>
                        <li><a class="active" href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html">2</a></li>
                        <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="https://thepixelcurve.com/html/techwix/techwix/blog-standard.html"><i class="fa fa-angle-right"></i></a></li>
                    </ul> -->
            </div>
        </div>
    </div>
<?php endif ?>


