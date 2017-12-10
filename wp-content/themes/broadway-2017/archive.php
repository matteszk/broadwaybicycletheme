<?php get_header(); ?>

<div class="main-nav-spacer"></div>

<div class="row center-xs">
	<div class="col-xs-12 col-lg-offset-3 gutter">
		<?php if (have_posts()) : ?>
			<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
			<?php if (is_category()) { ?>
			<h1><?php single_cat_title(); ?> Archive</h1>
			<?php } elseif(is_tag()) { ?>
			<h1>Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h1>
			<?php } elseif (is_day()) { ?>
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
			<?php } elseif (is_month()) { ?>
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
			<?php } elseif (is_year()) { ?>
			<h1>Archive for <?php the_time('Y'); ?></h1>
			<?php } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			<?php } ?>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 gutter pt1">
    <section class="primary">
		<?php while (have_posts()) : the_post(); ?>
			<div class="postContent mt3 first-of-type-mt0">
				<article id="post-<?php the_ID(); ?>" >
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="author">Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
					<?php the_excerpt(); ?>
					<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?> &bull; <?php edit_post_link('Edit', '', ' &bull; '); ?> <?php comments_popup_link('Read the full post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
		      <?php the_post_thumbnail( 'thumbnail' ); ?>
				</article>
			</div>
		<?php endwhile; ?>
		</section>
		<?php else : ?>
			<section class="primary">
				<div class="postContent">
					<article>
						<h2>Not Found</h2>
						<p>Sorry, but the requested resource was not found on this site.</p>
						<?php get_search_form(); ?>
					</article>
				</div>
			</section>
		<?php endif; ?>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 gutter pt1">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
