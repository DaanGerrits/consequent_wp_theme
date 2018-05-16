<div class="events__widget">
  <h2>Agenda</h2>

  <?php $query = new WP_Query( array( 'post_type' => 'agenda' ) ); ?>

  <ul class="events--list">
  <?php if ( $query->have_posts() ) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <!-- Render single event -->
          <li class="events--item">
            <?php the_title(); ?>
            <?php the_content(); ?>
          </li>
      <?php endwhile; wp_reset_postdata(); ?>
    <!-- show pagination here -->
  <?php else : ?>
    <!-- show 404 error here -->
  <?php endif; ?>
  </ul>
</div>
