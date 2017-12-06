<?php /* Template Name: Gallery
*/ ?>
<?php get_header(); ?>


		
<?php $posts = get_posts( "category=30&numberposts=3" ); ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<section class="primary"><?php if( $posts ) : ?>
     <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
       

		<div class="postContent"><article><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
         
         <p>
          <?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>
      	</p>
        
      
			
	</article></div>	
   <?php endforeach; ?>
<?php endif; ?>





</section>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>