<?php get_header(); ?>

<div id="main-content" class="container not-front">
  <div class="row">
    <main id="content" class="col-md-7">
      <?php while( have_posts() ) : the_post() ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    </main>

    <aside class="sidebar col-md-4 col-md-offset-1">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>


<?php get_footer(); ?>
