
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    $idVideo = get_post_meta( get_the_ID(), 'awe_id_video', true );
    $dateEvent = get_post_meta(get_the_ID(), 'awe_event_meta', true);
    ?>

    <div class="restbeef_blog_item">

        <?php if( !empty( $idVideo ) ): ?>
            <div class="restbeef_simple_blog_pf restbeef_blog_pf_video">
                <div class="restbeef_blog_pf_video_wrapper restbeef_photoswipe_wrapper" data-uniqid="7315">
                    <iframe src="https://www.youtube.com/embed/<?php echo $idVideo ?>" width="840" height="482" title="<?php the_title() ?>"></iframe>
                </div>
            </div>
        <?php else: ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="restbeef_simple_blog_pf restbeef_blog_pf_standard">
                    <a href="<?php the_permalink()?>" class="restbeef_blog_pf_link">
                        <img src="<?php the_post_thumbnail_url() ?>" width="840" alt="<?php the_title() ?>">
                    </a>
                </div>
            <?php endif;?>
        <?php endif ?>

        <div class="restbeef_blog_excerpt">
            <h4><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
            <p><?php echo wp_trim_words( $post->post_content, 90, '...' ); ?></p>
        </div>

        <div class="restbeef_simple_blog_footer">
            <div class="restbeef_simple_blog_meta">
                <?php if(!empty($dateEvent)): ?>
                    <span><?php echo date('MM d, Y', strtotime($dateEvent))?></span>
                <?php else: ?>
                    <span><?php echo the_date() ?></span>
                <?php endif ?>
                <?php echo (get_comments_number(get_the_ID()) > 0) ? '<span>'.get_comments_number(get_the_ID()).' Comments</span>' : '' ?>
            </div>
            <div class="restbeef_simple_blog_more">
                <a href="<?php the_permalink()?>"><?php _e('Xem Tiếp', 'bookawesome') ?></a>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<!--<nav class="rstbeef_blog_pagination">-->
<!--    <div class="nav-links">-->
<!--        <span aria-current="page" class="page-numbers current">1</span>-->
<!--        <a class="page-numbers" href="https://demo-storage.com/pm/html/restbeef/blog_sidebar.html#">2</a>-->
<!--        <a class="page-numbers" href="https://demo-storage.com/pm/html/restbeef/blog_sidebar.html#">3</a>-->
<!--        <span class="page-numbers dots">…</span>-->
<!--        <a class="page-numbers" href="https://demo-storage.com/pm/html/restbeef/blog_sidebar.html#">8</a>-->
<!--        <a class="next page-numbers" href="https://demo-storage.com/pm/html/restbeef/blog_sidebar.html#"><i class="fa fa-chevron-right"></i></a>-->
<!--    </div>-->
<!--</nav>-->
