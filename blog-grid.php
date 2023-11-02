<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php  $categoryDetail = get_the_category($post->id); ?>
<div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp">
    <article class="card card-style-04 h-100 rounded-0">
        <div class="blog-img position-relative overflow-hidden">
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
            <div class="card-list">
                <a href="#"><?php echo $categoryDetail[0]->name ?></a>
            </div>
        </div>
        <div class="card-body p-1-9">
            <span class="text-primary d-block mb-2 font-weight-600">
                <?php echo wp_date( 'M d, Y' )?>
            </span>
            <h3 class="h4 mb-0"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
        </div>
        <div
            class="d-flex fw-bold border-top px-1-9 py-3 border-color-light-black justify-content-between">
            <a href="<?php the_permalink()?>">Read more</a>
            <a href="<?php the_permalink()?>"><i class="ti-arrow-right"></i></a>
        </div>
    </article>
</div>
<?php endwhile; endif; ?>
