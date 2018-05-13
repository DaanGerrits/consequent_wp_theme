<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="container site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php endwhile; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
