<?php get_header(); ?>

<div class="main-nav-spacer"></div>

<div class="row center-xs">
	<div class="col-xs-12 col-lg-offset-3 gutter">
		<h1><span class="tilt-l">Broadway</span> <span class="tilt-r">Bike</span> Blog</h1>
	</div>

	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 gutter pt1">
		<?php
		$args = array(
			'posts_per_page' => 5,
			'paged' => $paged,
			'post_type' => 'post' );
		$postslist = new WP_Query( $args );

		if ( $postslist->have_posts() ) :
			 while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
				 <article class="mt3 first-of-type-mt0">
					 <span class="border-bottom dib" style="width:320px;"> </span>
					 <h1 class="h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					 <?php the_content(); ?>
				 </article>
			 <?php endwhile;

			 wp_reset_postdata();
	 endif; ?>
	 <div class="pt1 accent-font">
		 <span><?php posts_nav_link('</span><span class="fr">',  '&laquo; Newer Posts', 'Older Posts &raquo;'); ?></span>
	 </div>

	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 gutter pt1">
		<?php get_sidebar(); ?>
	</div>
</div>



<?php get_footer(); ?>
