<?php get_header(); ?>

<?php $image = get_field('hoofdafbeelding'); ?>

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
    </aside>
  </div>
</div>


<?php get_footer(); ?>
