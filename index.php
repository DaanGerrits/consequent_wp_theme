<?php get_header(); ?>

<?php
  $image = get_field('hoofdafbeelding');
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

          <?php if (!empty($image)) : ?>
          <div class="field-image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
          </div>
          <?php endif; ?>
        </article>
      <?php endwhile; ?>
    </main>

    <aside class="sidebar col-md-4 col-md-offset-1">
      <div id="related-content" class="related-sidebar">
        <?php $query = new WP_Query( array( 'post_type' => 'page', 'category_name' => $category->name, 'order' => 'ASC' ) );
        if ($category->name !== 'Visie en werkwijze' && $query->have_posts()) : ?>

        <?php if (strpos($category->name, "Gedragstherapie") !== false) : ?>
          <h2>Privé trainingen</h2>
        <?php else : ?>
          <h2><?php echo $category->name; ?></h2>
        <?php endif; ?>

        <ul>
        <?php while ($query->have_posts() ) : $query->the_post(); ?>
          <?php if ($post->ID !== $current_id && $post->post_title !== $category->name) { ?>
            <li>
              <i class="fas fa-arrow-circle-right"></i><a href="<?php echo get_permalink( $post->ID ); ?>" title="Bekijk <?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
          <?php } ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <?php endif; ?>
      </div>

      <div id="testimonials-sidebar" class="related-sidebar">
      <?php $query = new WP_Query( array( 'post_type' => 'testimonials', 'category_name' => $category->name, 'order' => 'ASC') );
      if ( $query->have_posts() && $category->name !== null) : ?>
        <h2>Testimonials</h2>
        <ul>
        <?php while ($query->have_posts() ) : $query->the_post(); ?>
          <?php if ($post->ID !== $current_id && $post->post_title !== $category->name) : ?>
            <li>
              <i class="fas fa-arrow-circle-right"></i><a href="<?php echo get_permalink( $post->ID ); ?>" title="Bekijk <?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
          <?php  endif; ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>
      </div>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
