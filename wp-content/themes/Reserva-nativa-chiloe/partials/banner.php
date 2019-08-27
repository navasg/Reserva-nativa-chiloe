<section class="banner-slick">
<?php $args = array( 'post_type'=>'Banner',
          'posts_per_page' => 3); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="item-banner">
          <img
            src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="">
          <div class="mask-banner">
            <div class="container">
              <h2 class="title-banner"><?php the_title(); ?></h2>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
  </section>