<h2>wat zeggen onze cursisten?</h2>
<div id="testimonial_slider" class="owl-carousel owl-theme">

<?php $query = new WP_Query( array( 'post_type' => 'testimonials' ) );

if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="text-center testimonial">
            <span class="testimonial--body"><?php the_content(); ?></span>
            <span class="testimonial--title"><?php the_title(); ?></span>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
  <!-- show pagination here -->
<?php else : ?>
  <!-- show 404 error here -->
<?php endif; ?>

</div>
