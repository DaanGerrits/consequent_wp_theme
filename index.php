<?php get_header(); ?>

<main id="content">
  <?php while( have_posts() ) : the_post() ?>
    <article class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>
</main>

<aside class="sidebar">

</aside>

<?php get_footer(); ?>
