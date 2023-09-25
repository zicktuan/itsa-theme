<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
    $categoryDetail=get_the_category($post->id);
?>    
    <div class="single-blog-post single-blog">
        <div class="blog-image">
            <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail_url() ?>" width="826" height="414" alt="<?php the_title() ?>"></a>
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
                <span><i class="fas fa-user"></i> <a href="#"><?php the_author() ?></a></span>
                <!-- <span><i class="far fa-comments"></i> <?php //echo get_comments_number(get_the_ID()) ?></span> -->
            </div>
            <h3 class="title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
            <p class="text"><?php the_excerpt() ?></p>
            <div class="blog-btn">
                <a class="blog-btn-link" href="<?php the_permalink()?>"><?php _e('Đọc Tiếp', 'bookawesome') ?> <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
