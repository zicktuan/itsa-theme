<?php get_header();?>
<?php
global $myplugin;
$optionTheme  = $myplugin->themeSettings->getSettings();
$showBlog = !empty($optionTheme['awe_config_show_blog']) ? $optionTheme['awe_config_show_blog'] : '0';
$imageUrlCurrent = wp_get_attachment_image_src(get_post_thumbnail_id(),'itsa-thumbnail-856x490');
$imageUrlCurrent = $imageUrlCurrent[0];
$categoryDetail=get_the_category(get_the_ID());

?> 
    <?php get_template_part('blog', 'banner') ?>
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <article class="card border-0 primary-shadow">
                                    <img src="<?php echo $imageUrlCurrent ?>" alt="<?php the_title() ?>" class="wow fadeIn">
                                    <div class="card-body p-1-6 p-sm-1-9">
                                        <ul class="list-unstyled mb-3 wow fadeIn">
                                            <li class="d-inline-block me-3">
                                                <a href="#!" class="display-31">
                                                    <i class="ti-calendar me-1 text-primary"></i> <?php echo wp_date( 'M d, Y' )?>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="wow fadeIn">
                                            <h3 class="mb-3"><?php the_title() ?></h3>
                                            <p><?php the_content() ?></p>
                                        </div>

                                        <?php $tags = get_the_tags(get_the_ID()); ?>
                                        <?php if ( !empty( $tags ) ): ?>
                                        <div class="row border-top border-color-light-black pt-4 pt-lg-5 mt-4 mt-lg-5 g-0">
                                            <div class="col-md-8 mb-4 mb-md-0 wow fadeIn">
                                                <h5 class="h6 mb-3">Related Tags:</h5>
                                                <div class="blog-tags mt-n2">
                                                    <?php foreach ($tags as $tag): ?>
                                                        <a href="<?php echo get_tag_link( $tag->term_id ) ?>"><?php echo $tag->name ?></a>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4 wow fadeIn" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                                                <div class="blog-share-icon text-start text-md-end">
                                                    <h5 class="h6 mb-3">Share:</h5>
                                                    <ul class="list-unstyled m-0 p-0">
                                                        <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                        <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-dribbble"></i></a></li>
                                                        <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                                        <li class="d-inline-block"><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                        <?php endif; ?>

                                    </div>
                                </article>
                            </div>

                            <div class="col-12 wow fadeIn">
                                <div class="page-navigation mb-6 mt-2-9">
                                    <?php $prevPost = get_adjacent_post(false, '', true); ?>
                                    <?php if(!empty($prevPost)): ?>
                                    <?php $prevImg = get_the_post_thumbnail($prevPost,'itsa-thumbnail-70x70');?>
                                    <div class="prev-page">
                                        <div class="page-info">
                                            <a href="<?php echo get_permalink($prevPost->ID) ?>">
                                                <span class="image-prev"><img src="<?php echo $prevImg ?>" alt="<?php echo $prevPost->post_title?>"></span>
                                                <div class="prev-link-page-info">
                                                    <h4 class="prev-title"><?php echo $prevPost->post_title?></h4>
                                                    <span class="date-details"><span class="create-date"><?php echo wp_date( 'M d, Y' )?></span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                    <?php $nextPost = get_adjacent_post(false, '', false); ?>
                                    <?php if(!empty($nextPost)):?>
                                    <?php $nextImg = get_the_post_thumbnail($nextPost,'itsa-thumbnail-70x70');?>
                                    <div class="next-page">
                                        <div class="page-info">
                                            <a href="<?php echo get_permalink($nextPost->ID) ?>">
                                                <div class="next-link-page-info">
                                                    <h4 class="next-title"><?php echo $nextPost->post_title?></h4>
                                                    <span class="date-details"><span class="create-date"><?php echo wp_date( 'M d, Y' )?></span></span>
                                                </div>
                                                <span class="image-next">
                                                    <img src="<?php echo $nextImg ?>" alt="<?php echo $nextPost->post_title?>">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php get_template_part('blog', 'sidebar') ?>
                </div>
            </div>
        </section>


<?php get_footer();?>