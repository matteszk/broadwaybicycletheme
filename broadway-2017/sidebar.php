		<aside id="sideBar">
        
    
<!--<h3>Seasonal Updates</h3>-->
<section>

<?php query_posts( array ( 'category_name' => 'seasonal-updates', 'posts_per_page' => 1 ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
<p><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'category-thumb' ); ?></a>

<?php endwhile; ?><?php endif; ?>
</section>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


					<h3>H5 Template Theme</h3>
                    <section>
					<p>H5 is a theme template designed with HTML 5 that you can use for your site <em>right now</em>. 
					It contains all the template files required to customize your own theme quickly and easily. 
					H5 looks and works great in all modern browsers and is completely valid HTML 5 and CSS.</p>
                    </section>
				
				
					<h3>Search the Site</h3>
					<?php get_search_form(); ?>

				

				<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

				
					<h3>Archives</h3>
					 <section>
						<?php wp_get_archives('type=monthly'); ?>
					 
				

				<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>

				
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
				</section>
				<?php }?>
				<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

				<?php if (is_home() || is_page() || is_single()) { ?>
				<?php wp_list_bookmarks(); ?>

				
					<h3>Meta</h3>
					<section>
						<?php wp_register(); ?>
						<?php wp_loginout(); ?>
						<a href="http://validator.w3.org/check/referer" title="Built with valid HTML 5" rel="nofollow">Valid <abbr title="HyperText Markup Language">HTML</abbr> 5</a>
						<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fdiggingintowordpress.com%2FThemePlayground%2Fwp-content%2Fthemes%2FH5%2Fstyle.css&profile=css21&usermedium=all&warning=1&lang=en" title="Styled with valid CSS" rel="nofollow">Valid CSS 2.1</a>
						<a href="http://wordpress.org/" title="Proudly Powered by WordPress" rel="nofollow">WordPress</a>
						<?php wp_meta(); ?>
					</section>
				<?php } ?>

				<li>
					<h3>H5 Resources</h3>
					<ul>
						<li><a href="http://perishablepress.com/" title="Perishable Press">Perishable Press</a></li>
						<li><a href="http://diggingintowordpress.com/" title="Digging into WordPress">Digging into WordPress</a></li>
						<li><a href="http://css-tricks.com/" title="CSS Tricks">CSS Tricks</a></li>
					</ul>
				</li>
			<?php endif; ?>
			</ul>
		</aside>