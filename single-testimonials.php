<?php get_header(); ?>

<?php $image = get_field('hoofdafbeelding'); ?>

	<div id="main-content" class="container not-front content-area">
		<main id="content" class="site-main" role="main">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>

				<?php if (!empty($image)) : ?>
		    <div class="field-image col-md-3">
		      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
		    </div>
		    <?php endif; ?>

				<div class="field-content col-md-9">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php endwhile; ?>
				</div>

			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
