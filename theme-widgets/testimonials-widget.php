<?php $query = new WP_Query( array( 'post_type' => 'testimonials' ) );

if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <h2>wat zeggen onze cursisten?</h2>
      <div id="testimonial_slider" class="owl-carousel">
        <div class="text-center">
            <em><strong><?php the_content(); ?></strong></em>
            <span><?php the_title(); ?></span>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  <!-- show pagination here -->
<?php else : ?>
  <!-- show 404 error here -->
<?php endif; ?>
