<?php /* Template Name: No-sidebar */ ?>

<?php get_header(); ?>
<?php $image = get_field("hoofdafbeelding"); ?>
<div id="main-content" class="container not-front no-sidebar">
  <main id="content" role="main">
    <div class="row">
      <article class="col-xs-12">
        <h2><?php the_title(); ?></h2>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>

          <?php if (!empty($image)) : ?>
          <div class="field-image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
          </div>
          <?php endif; ?>
        <?php endwhile; endif; ?>

      </article>

    </div>
  </main><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
