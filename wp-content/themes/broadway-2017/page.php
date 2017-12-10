<?php get_header(); ?>

<div class="row center-xs ">
	<div class="col-xs-12 col-sm-10 col-md-8 gutter mt6">
	<h1><?php the_title(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="primary">
		<div class="postContent">
			<article id="post-<?php the_ID(); ?>">
				<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>
				<p><?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?></p>
			</article>
		</div>
	</section>

	<?php endwhile; else: ?>
		<section class="primary">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>
	<?php endif; ?>
	</div></div>

<?php get_footer(); ?>
