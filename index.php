<?php get_header(); ?>

<main id="content" class="container">
  <?php while( have_posts() ) : the_post() ?>
    <article class="col-md-8">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>

  <aside class="sidebar col-md-4">
    <?php get_sidebar(); ?>
  </aside>
</main>

<?php get_footer(); ?>
