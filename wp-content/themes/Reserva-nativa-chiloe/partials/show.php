<section>
    <div class="container padding-top-bottom">
      <h2 class="title-section">Isla Grande de Chiloé</h2>
      <div class="multiple-items">
        <?php $args = array( 'post_type'=>'informacion'); ?>
          <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <a class="box-card" data-toggle="modal" data-target="#modal-<?php echo get_the_ID(); ?>">
                <div class="item-home">
                  <div class="img-item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                  </div>
                  <div class="body-item">
                    <h3 class="title-item"><?php the_title(); ?> </h3>
                    <p class="description-item">
                      <?php echo excerpt(15); ?></p>
                  </div>
                </div>
              </a>
        <?php endwhile; ?> 
    </div>
  </div>
  <?php $args = array( 'post_type'=>'informacion'); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="modal fade" id="modal-<?php echo get_the_ID(); ?>" role="dialog"
    aria-labelledby="<?php echo get_the_ID() . "Title" ?>" aria-hidden="<?php if( get_the_ID()): echo "false"; else: echo "true"; endif; ?> ">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title title-item text-center" id="exampleModalScrollableTitle"><?php the_title(); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="">
            <?php the_content(); ?>
          </p>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<?php endwhile ?> 

</section>