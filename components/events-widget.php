<div class="events__widget">
  <h2>Agenda</h2>

  <?php $query = new WP_Query( array( 'post_type' => 'agenda' ) ); ?>

  <ul class="events--list">
    <?php if ( $query->have_posts() ) : ?>
    <!-- $i sets max number of items to render -->
      <?php $i = 0; while ($i < 8 && $query->have_posts() ) : $query->the_post(); ?>
        <!-- Render single event -->
          <li class="events--item">
            <span class="event--title"><?php the_title(); ?></span>
            <span class="event--body"><?php the_content(); ?></span>
          </li>
      <?php $i++; endwhile; wp_reset_postdata(); ?>
    <!-- show pagination here -->
  <?php else : ?>
    <!-- show 404 error here -->
  <?php endif; ?>
  </ul>
</div>
