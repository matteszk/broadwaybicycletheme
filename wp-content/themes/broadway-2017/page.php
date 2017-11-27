<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

	<section class="primary">
		<div class="postContent">	<article id="post-<?php the_ID(); ?>">
				
					
		
				
			
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

			
				<p>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</p>
			</article>
	</div>	</section>

	<?php endwhile; else: ?>

		<section class="primary">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>