<?php get_header();?>
<?php
global $myplugin;
$optionTheme  = $myplugin->themeSettings->getSettings();
$showBlog = !empty($optionTheme['awe_config_show_blog']) ? $optionTheme['awe_config_show_blog'] : '0';
$imageUrlCurrent = wp_get_attachment_image_src(get_post_thumbnail_id(),'itsa-thumbnail-826x414');
$imageUrlCurrent = $imageUrlCurrent[0];
$categoryDetail=get_the_category(get_the_ID());
?>
    <?php get_template_part('banner', 'blog') ?>
    <div class="section blog-details-section section-padding-02">
        <div class="container">
            <div class="blog-details-wrap">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog-details-post">
                            <div class="single-blog-post single-blog">
                                <div class="blog-image">
                                    <a href="https://thepixelcurve.com/html/techwix/techwix/blog-details.html">
                                        <img src="<?php echo $imageUrlCurrent ?>" alt="<?php the_title() ?>">
                                    </a>
                                    <div class="top-meta">
                                        <span class="date"><span><?php echo get_the_date('j') ?></span><?php echo get_the_date('M') ?></span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="tag"><i class="far fa-bookmark"></i> 
                                            <?php 
                                                foreach($categoryDetail as $cat){
                                                    if (count($categoryDetail) > 1) {
                                                        echo $cat->name . " / ";
                                                    } else {
                                                        echo $cat->name;
                                                    }
                                                }
                                            ?>
                                        </span>
                                        <span><i class="fas fa-user"></i> <a href="#"><?php echo get_the_author() ?></a></span>
                                        <!-- <span><i class="far fa-comments"></i> 0 Comments</span> -->
                                    </div>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <p class="text"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                            <div class="blog-details-content">
                                <!-- <div class="blog-quote">
                                    <blockquote class="blockquote">
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs. there’s no corner of our day-to-day lives that hasn’t been.</p>
                                    </blockquote>
                                </div> -->
                                <div class="blog-details-text">
                                    <p><?php the_content() ?></p>
                                </div>


                                <!-- tag="" -->
                                <div class="blog-details-tag-share">
                                <?php
                                    $tags = get_the_tags(get_the_ID());
                                ?>
                                <?php if ( !empty( $tags ) ): ?>
                                    <div class="blog-details-tag">
                                        <div class="sidebar-widget">
                                            <span class="label">Tags :</span>
                                            <ul class="sidebar-tag">
                                                <?php foreach ($tags as $tag): ?>
                                                    <li><a href="<?php echo get_tag_link( $tag->term_id ) ?>"><?php echo $tag->name ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="blog-details-share">
                                        <ul class="social-share">
                                            <li><a class="share-facebook" href="https://thepixelcurve.com/html/techwix/techwix/blog-details.html#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="share-twitter" href="https://thepixelcurve.com/html/techwix/techwix/blog-details.html#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="share-pinterest" href="https://thepixelcurve.com/html/techwix/techwix/blog-details.html#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div> -->
                                <?php endif; ?>
                                </div>
                                <!-- end tag="" -->

                                <div class="techwix-post-pagination">
                                    <?php $prevPost = get_adjacent_post(false, '', true); ?>
                                    <?php if(!empty($prevPost)): ?>
                                    <div class="previous-post">
                                        <div class="blog-pagination-post">
                                            <div class="post-thumb">
                                                <a href="<?php echo get_permalink($prevPost->ID) ?>">
                                                    <i class="flaticon-back"></i>
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="title">
                                                    <a href="<?php echo get_permalink($prevPost->ID) ?>"><?php echo $prevPost->post_title?></a>
                                                </h4>
                                                <span class="date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('M j, Y') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                 
                                    <?php $nextPost = get_adjacent_post(false, '', false); ?>
                                    <?php if(!empty($nextPost)): ?>
                                    <div class="next-post">
                                        <div class="blog-pagination-post">
                                            <div class="post-content text-end">
                                                <h4 class="title">
                                                    <a href="<?php echo get_permalink($nextPost->ID) ?>"><?php echo $nextPost->post_title?></a>
                                                </h4>
                                                <span class="date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date('M j, Y') ?></span>
                                            </div>
                                            <div class="post-thumb">
                                                <a href="<?php echo get_permalink($nextPost->ID) ?>">
                                                    <i class="flaticon-next"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                </div>

                                <!-- <div class="comment-wrap">
                                    <div class="comment-form">
                                        <h3 class="comment-title">Comments (<?php //echo get_comments_number(get_the_ID()) ?>)</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <div class="comment-form-wrap">
                                            <?php //if (comments_open() && !post_password_required()) {comments_template('', true);}?>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>


                    <!-- Sidebar -->
                    <div class="col-xl-3 col-lg-4">
                        <div class="blog-sidebar">
                            <?php dynamic_sidebar('blog-sidebar-area'); ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Blog Details Wrap End -->
        </div>
    </div>
    <?php get_template_part('infor', 'blog') ?>


<?php get_footer();?>