<?php get_header(); ?>

<?php
	// cache custom fields
	$image = get_field('foto');
	$email = get_field('e-mail');
	$phone = get_field('telefoon');
?>

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

				<?php if (!empty($email) || !empty($phone)) : ?>
					<div class="team__contact">
					<?php
						if (!empty($email)) {
							echo "<div class='email'><strong>E-mail:</strong> <a href='mailto:". $email. "' title='Stuur e-mail'>" .$email. "</a></div>";
						}
						if (!empty($phone)) {
							echo "<div class='phone'><strong>Telefoon:</strong> " .$phone. "</div>";
						}
					?>
					</div>
			 	<?php endif; ?>

				<a href="../../onze-mensen" class="btn btn-lg btn-cta">Terug</a>
				<?php endwhile; ?>
			</div>

		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
