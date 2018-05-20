<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<div id="main-content" class="container not-front team-page">
  <main id="content" role="main">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php the_title(); ?></h2>

        <?php $query = new WP_Query( array( 'post_type' => 'team' ) ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php
          $name = get_field("naam");
          $image = get_field("foto");
        ?>

        <div class="col-sm-3 team--member">
          <a href="#" title="<?php echo "Meer over " .$name; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
          <span><?php echo $name; ?></span>
        </div>

        <?php endwhile; endif; ?>
      </div>

    </div>
  </main><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
