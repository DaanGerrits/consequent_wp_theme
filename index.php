<?php get_header(); ?>

<?php $image = get_field('hoofdafbeelding'); ?>

<!-- If page has category save this to variable to get connected posts for sidebar -->
<?php
  $category = get_the_category()[0];
  $current_id = get_the_id();
?>


<div id="main-content" class="container not-front">
  <div class="row">
    <main id="content" class="col-md-7">
      <?php while( have_posts() ) : the_post() ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>

      <?php if (!empty($image)) : ?>
      <div class="field-image">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
      </div>
      <?php endif; ?>
    </main>

    <aside class="sidebar col-md-4 col-md-offset-1">
      <?php get_sidebar(); ?>

      <!-- if has linked pages via category -->
      <?php $query = new WP_Query( array( 'post_type' => 'page', 'category_name' => $category->name, 'order' => 'ASC' ) );
      if ( $query->have_posts() ) : ?>
      <h2><?php echo $category->name; ?></h2>
          <ul>
          <!-- $i sets max number of items to render -->
          <?php while ($query->have_posts() ) : $query->the_post(); ?>

              <!-- Zolang post->ID is niet gelijk aan current_id en post->Title niet gelijk aan category naam -->
              <?php if ($post->ID !== $current_id && $post->post_title !== $category->name) { ?>
                  <li><a href="<?php echo get_permalink( $post->ID ); ?>" title="Bekijk <?php the_title(); ?>"><?php the_title(); ?></a></li>
              <?php  } ?>

          <?php endwhile; wp_reset_postdata(); ?>
        <!-- show pagination here -->
        <?php else : ?>
        <!-- show 404 error here -->
        </ul>
      <?php endif; ?>
    </aside>
  </div>
</div>


<?php get_footer(); ?>
