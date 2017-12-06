<?php get_header(); ?>

<div class="row center-xs ">
	<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 gutter mt6">
		<!--articles-->
		<h1><span class="tilt-l">Broadway</span> <span class="tilt-r">Bike</span> Blog</h1>

		<?php
		$lastposts = get_posts( array(
		    'posts_per_page' => 3
		) );

		if ( $lastposts ) :
	    foreach ( $lastposts as $post ) :
	        setup_postdata( $post ); ?>
	        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	        <?php the_content(); ?>
	    <?php
	    endforeach;
	    wp_reset_postdata();
		endif; ?>

		<?php
		// $the_query = new WP_Query( $args );
		$the_query = new WP_Query(  );
		if ( $the_query->have_posts() ) :
	    while ( $the_query->have_posts() ) :
      $the_query->the_post();
			?>
			<article id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<p><?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?></p>
				<p>
					<span class="author">Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></span><br />
					<?php the_tags('Tags: ', ', ', '<br>'); ?> Read all <?php the_category(', '); ?> &bull; <?php edit_post_link('Edit', '', ' &bull; '); ?>
				</p>

				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
					<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4dfb69853a5ddad6"></script>
				<!-- AddThis Button END -->
			</article>
		  <?php endwhile; ?>

		<?php else : ?>
		<article class="primary mt2">
			<h1 class="h2">Not Found</h1>
			<p>Sorry, but the requested resource was not found on this site.</p>
			<?php get_search_form(); ?>
		</article>
		<?php endif; ?>

	<?php wp_reset_postdata();?>
	</div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
