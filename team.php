<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<div id="main-content" class="container not-front team-page">
  <main id="content" role="main">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php the_title(); ?></h2>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <section id="team" class="row team__block">
          <?php $query = new WP_Query( array( 'post_type' => 'team', 'order' => 'ASC' ) ); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php $image = get_field("foto"); ?>

          <div class="col-md-3 col-sm-4 col-xs-6 team--member">
            <a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo "Meer over " .$image['alt']; ?>">
              <div class="team--image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
            </a>
            <span><?php the_title(); ?></span>
          </div>

          <?php endwhile; endif; ?>
        </section>
      </div>

    </div>
  </main><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
