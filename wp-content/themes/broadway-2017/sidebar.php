<aside id="sideBar">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<h4 class="mb1">Search the Site</h4>
	<?php get_search_form(); ?>
	<div class="mt2">
	<?php wp_list_categories('show_count=1&title_li=<h4 class="mb50">Categories</h4>'); ?>
	</div>
	<h4 class="mt2 mb50">Archives</h4>
	<?php wp_get_archives('type=yearly'); ?>
	<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>
		<div class="mt1 italic">
			<?php if (is_404()) { ?>
			<p>Please contact us or try again with a new search using the form above.</p>

			<?php } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for <?php the_time('F, Y'); ?>.</p>

			<?php } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for the year <?php the_time('Y'); ?>.</p>

			<?php } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for <strong>'<?php the_search_query(); ?>'</strong>.</p>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>
			<?php } ?>
		</div>
	<?php } ?>

	<?php endif; ?>
</aside>
