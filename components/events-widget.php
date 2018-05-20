<div class="events__widget">
  <h2>Agenda</h2>

  <?php $query = new WP_Query( array( 'post_type' => 'agenda' ) ); ?>

  <ul class="events--list">
    <?php if ( $query->have_posts() ) : ?>

    <!-- $i sets max number of items to render -->
      <?php $i = 0; while ($i < 8 && $query->have_posts() ) : $query->the_post(); ?>

        <?php
          $date = get_field("datum");
          $location = get_field("locatie");
          $time = get_field("tijdstip");
        ?>

        <!-- Render single event -->
          <li class="events--item">
            <span class="event--title"><?php the_title(); ?></span>

            <?php if ($date || $location || $time) : ?>
              <div class="event--info">
              <?php if ($date) : ?>
                <div class="event--date"><?php print "<span>Datum:</span> " . $date; ?></div>
              <?php endif; ?>

              <?php if ($time) : ?>
                <div class="event--time"><?php print "<span>Tijdstip:</span> " . $time; ?></div>
              <?php endif; ?>

              <?php if ($location) : ?>
                <div class="event--location"><?php print "<span>Locatie:</span> " . $location; ?></div>
              <?php endif; ?>
              </div>
            <?php endif; ?>

            <p class="event--body"><?php the_content(); ?></p>

          </li>
      <?php $i++; endwhile; wp_reset_postdata(); ?>
    <!-- show pagination here -->
  <?php else : ?>
    <!-- show 404 error here -->
  <?php endif; ?>
  </ul>
</div>
