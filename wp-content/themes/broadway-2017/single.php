<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<section class="primary">
			<div class="postContent">	<article id="post-<?php the_ID(); ?>">
				
				
					<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				
			
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

					<p>
						Read more news from <?php the_category(', ') ?>. 
						

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// both comments and pings open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

						

						

						<?php } edit_post_link('Edit this entry','','.'); ?>

					</p>
                    
              
                    
				
		


			<nav>
				<p><?php previous_post_link(); ?> &bull; <?php next_post_link(); ?></p>
                
			</nav>
            
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4dfb69853a5ddad6"></script>
<!-- AddThis Button END --> 

            	</article></div>
		</section>

	<?php endwhile; else: ?>

		<section class="primary">
			<div class="postContent">
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article></div>
		</section>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>