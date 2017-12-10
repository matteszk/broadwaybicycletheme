<?php get_header(); ?>

<div class="main-nav-spacer"></div>

<div class="row center-xs">
	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 gutter pt1">

		<section>
			<?php if (have_posts()) : ?>
			<article id="post-<?php the_ID(); ?>">
				<h1 class="h2">Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
				<ol>
					<?php while (have_posts()) : the_post(); ?>
					<li class="mt1 mb2">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</li>
					<?php endwhile; ?>
				</ol>
			</article>
			<nav>
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1>Not Found</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>

		</section>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 gutter pt1">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
