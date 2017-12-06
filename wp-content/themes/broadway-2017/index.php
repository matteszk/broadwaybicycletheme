<?php get_header(); ?>

<div class="row center-xs ">
	<div class="col-xs-12 col-sm-10 col-md-8 gutter mt6">
		<!--articles-->
		<h1>Broadway Bike Blog</h1>
		<section class="primary">
		<?php $posts = query_posts($query_string.'posts_per_page=5');
		print_r($posts);
		echo $query_string;
		if (have_posts()) : while (have_posts()) : the_post();?>
		<div class="postContent">
			<article id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
		</div>

	  <?php endwhile; ?>
	  </section>
		<?php else : ?>
		<section class="primary">
			<article>
				<h1>Not Found</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>
		</section>
<?php endif; ?>
	</div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
