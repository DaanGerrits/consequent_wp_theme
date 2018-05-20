<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php $image = get_field('hoofdafbeelding'); ?>

<div id="main-content" class="container not-front contact-page">
  <main id="content" role="main">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="col-sm-6 contact-form">
        <?php echo do_shortcode('[contact-form-7 id="103" title="Contact"]'); ?>
      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-sm-6 contact-info">
        <?php if (!empty($image)) : ?>
        <div class="field-image">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
        </div>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </main><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
