<?php get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="pageparagraphs">
			<?php the_content(); ?>
		</div>
	<?php endwhile; else: ?>

		<div class="page-header">
			<h1 class="pagetitles">No content exists for this page!!</h1>
		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>

