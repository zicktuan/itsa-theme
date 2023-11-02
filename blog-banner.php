<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
    if (is_home() && !is_front_page()) {
        $logo = !empty($optionTheme['blog_bg']) ? $optionTheme['blog_bg'] : '';
        $title = !empty($optionTheme['blog_header_title_bg']) ? $optionTheme['blog_header_title_bg'] : '';
    } else {
        $logo = !empty($optionTheme['single_blog_bg']) ? $optionTheme['single_blog_bg'] : '';
        $title = !empty($optionTheme['single_blog_header_title_bg']) ? $optionTheme['single_blog_header_title_bg'] : '';
    }
?>
    
<section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 left-overlay-dark"
    data-overlay-dark="8" data-background="<?php echo !empty($logo) ? $logo : '' ?>"
    style="background-image: url(<?php echo !empty($logo) ? $logo : '' ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="position-relative">
                    <h1><?php echo $title ?></h1>
                </div>
                <ul>
                    <li><a href="<?php home_url()?>">Home</a></li>
                    <li><a href="#"><?php echo $title ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="line-animated">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</section>