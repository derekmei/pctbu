<?php get_header(); ?>

<div class="col-sm-1"></div>
<div class="col-sm-10">

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
<div class="col-sm-1"></div>

<?php get_footer(); ?>

