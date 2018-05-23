<?php /* Template Name: Locatie */ ?>

<?php get_header(); ?>

<div id="main-content" class="container not-front team-page">
  <main id="content" role="main">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php the_title(); ?></h2>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>

    <div class="row">
      <section id="gmap">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2454.350907346002!2d6.244907715789508!3d52.03692157972559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c79062b1300b11%3A0x64d7a51050ec1838!2sBeekstraat+13%2C+7227+NC+Toldijk!5e0!3m2!1snl!2snl!4v1527083246861"
          width="100%" 
          height="450"
          frameborder="0"
          style="border:0"
          allowfullscreen>
        </iframe>
      </section>
    </div>
  </main><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
