<?php get_header(); ?>

<div class="main-nav-spacer"></div>

<div class="row center-xs">
	<div class="col-xs-12 col-lg-offset-3 gutter">
		<h1><span class="tilt-l">Broadway</span> <span class="tilt-r">Bike</span> Blog</h1>
	</div>

	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 gutter pt1">
		<?php
		$lastposts = get_posts( array(
		    'posts_per_page' => 5
		) );

		if ( $lastposts ) :
	    foreach ( $lastposts as $post ) :
	        setup_postdata( $post ); ?>
					<article class="mt3 first-of-type-mt0">
		        <h1 class="h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		        <?php the_content(); ?>
					</article>
	    <?php
	    endforeach;
	    wp_reset_postdata();
		endif; ?>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 gutter pt1">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
