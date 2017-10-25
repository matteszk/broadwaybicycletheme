<?php /* Template Name: Shop
*/ ?>
<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Shop</a></h1>

	<section class="store">
		<div class="shopContent">	<article id="post-<?php the_ID(); ?>" class="shop">
				
					
		
				
			
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

			
				<p>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</p>
                <div class="clear"></div>
			</article>
	</div>	</section>

	<?php endwhile; else: ?>

		<section class="store">
        <div class="shopContent">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article></div>
		</section>

	<?php endif; ?>



<?php get_footer(); ?>