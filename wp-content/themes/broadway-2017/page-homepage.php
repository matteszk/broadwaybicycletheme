<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>


<div class="main-nav-spacer"></div><!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser to improve your experience.</p>
<![endif]-->
<header class="relative header">
	<div class="row center-xs start-sm middle-sm center-sm">
		<div class="col-xs-12 col-sm-5 col-md-6 col-lg-4 tc gutter mt2"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/bb_logo-uncompressed.svg" alt="Broadway Bicycle"/></div>
		<div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 mt2 tc sm-tr gutter">
			<p class="h3 tight">Worker Owned <nobr>Since 1972</nobr></p>
			<ul class="mt50">
				<li><a href="mailto:broadway@broadwaybicycleschool.com">broadway@broadwaybicycleschool.com</a></li>
				<li><a href="https://www.google.com/maps/place/Broadway+Bicycle+School/@42.3704856,-71.1056672,16.92z/data=!4m5!3m4!1s0x0:0x4363b979c482338e!8m2!3d42.3704722!4d-71.1035003">351 Broadway, Cambridge MA 02139</a></li>
				<li><a href="tel:+16178683392">(617) 868–3392</a></li>
			</ul>
			<table class="center mt1 sm-tr sm-fr cl">
				 <?php include 'hours.php' ?>
			 </table>
		</div>
	</div>
</header>

<?php
$args = array( 'post_type' => 'bulletin', 'post_status' => 'publish', 'posts_per_page' => 1 );
$loop = new WP_Query($args);
while ($loop->have_posts()) :
    $loop->the_post();
    $endOfTodayTime = strtotime('today midnight');
    if ($endOfTodayTime <= strtotime(get_field('end'))) :
    ?>
	<aside class="row pt2 pb2 bulletin">
		<div class="dark col-xs-12 col-md-8 col-md-offset-4 col-lg-5 col-lg-offset-5 gutter pl2-m pt2 pb2 tilt-r" style="text-align: left;">
			<h1 class="h2"><?php  the_title(); ?></h1>
			<?php the_content();	?>
		</div>
	</aside>
<?php endif; endwhile; wp_reset_query(); ?>


<div class="row mt3 md-mt6">
	<div class="col-xs-12 col-sm-10 col-md-7 col-lg-4 col-lg-offset-1 md-tr mb1 translate-pro gutter">
		<h2 class="h1 tilt-l">Professional <span class="h2"> Repairs, Builds, <nobr>& Tune–ups</nobr></span></h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-5 col-md-5">
		<div class="cover image1 bg-center mt1 unveil" data-class="working-1"></div>
		<div class="md-show cover image3 bg-center mt1 unveil" data-class="working-2"></div>
	</div>
	<div class="col-xs-12 col-sm-7 col-md-6 col-lg-4 xs-mt1 gutter">
		<p>At Broadway, we take pride in our quality repairs. We fix bicycles expertly, from minor repairs, flats, and adjustments to package deals such as tune-ups and overhauls. We love what we do, so you can be sure that we’ll fix your bike better than anyone. All of our repairs go through a full double safety check. We always test ride your bike before we give it the thumbs up to make sure your bike is safe and performing as it should! </p>
		<p>No appointment necessary—just bring your bike in and we can give you a free estimate. You can leave the bike with us, or schedule a more convenient time.</p>
		<div class="xs-only-tc"><a class="btn mt2 mb3" href="<?php echo get_page_link(4288); ?>">View Services</a></div>
	</div>
</div>


<div class="row section-margin">
	<div class="col-xs-12 col-md-7 col-md-offset-2 gutter">
		<h2 class="h1"><span class="tilt-l">Classes & </span>
<span class="tilt-r">Seminars</span>
		</h2>
	</div>
</div>
<div class="row mt1">
	<div class="pr2 col-xs-12 col-sm-6 col-md-5 col-md-offset-2 col-lg-4 gutter xs-mt1">
		<p>We love fixing bikes, and we’ve been sharing that love—and skills—in our classes for 30+ years. We host classes for all cyclists and the bikecurious, including classes and intentional spaces for FTW (femme, trans, women) bikers, such as our monthly <i>Grrrease Time</i>, an open shop and teaching time for FTW folks. Visit <a href="https://femmechanics.wordpress.com/">Boston's Femmechanics</a> website to learn more. </p>
		<p>Class Descriptions</p>

		<?php $classes = get_field('class_descriptions', 4293);
		if ($classes): ?>
			<ul class="list--indented">
			<?php foreach($classes as $class):
				$name =  $class['name'];
				$id =  str_replace(' ', '', $name); ?>
				<li>
					<a href="<?php echo get_page_link(4293) . '#' . $id; ?>">
						<?php echo $name; ?>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<p><a class="btn mt1 ml05 mb3" href="<?php echo get_page_link(4293) ?>">Upcoming Classes</a></p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-5 pa0 first-xs last-sm">
		<div class="cover image1 bg-center unveil" data-class="teaching-1"></div>
	</div>
</div>

<aside>
	<div class="row mt1">
		<?php echo do_shortcode('[instagram-feed showheader=false]'); ?>
	</div>
	<div class="row mt1">
		<div class="col-xs-12 col-md-3 col-md-offset-1 md-tr gutter">
			<a class="btn" href="https://www.instagram.com/broadwaybikes/"><i class="fa fa-instagram"></i>&nbsp;Follow Us</a>
		</div>
	</div>
</aside>

<section>
	<div class="row mt3">
		<div class="col-xs-12 col-md-3 col-md-offset-1 md-tr gutter">
			<h1>
				<span class="tilt-l md-db"> Worker</span>
				<span class="tirl-r"> Owned</span>
				<span class="tilt-r"> Since</span>
				<span class="tilt-r md-db"> 1972</span>
			</h1>
		</div>
		<div class="col-xs-12 col-md-6 gutter">
			<p>We’re a worker owned cooperative in operation for 40+ years. To quote our friends at Equal Exchange, <blockquote class="mt50 pl1" cite="http://equalexchange.coop/"><p>“A worker cooperative is an alternative for-profit structure based upon standard democratic principles. It is not designed to maximize profits, nor returns to investors, but rather to bring to the workplace many of the rights and responsibilities that we hold as citizens in our communities. These principles include one-person/one-vote equality; open access to information (i.e., open-book management); free speech; and the equitable distribution of resources (such as income).”</p></blockquote> </p>
			<p>Because of this we adhere to the 7 Cooperative Principles which includes upholding worker rights and participating in our community for the better.We are proud to offer a minimum wage of $15 per hour and health insurance for full time workers. </p>
			<p>Walking into a bicycle shop for the first time can be an intimidating endeavor for many, which is why Broadway strives to create a welcoming environment for all persons that come through our door.</p>
		</div>
	</div>
	<div class="row pa0 mt3 middle-xs">
		<div class="col-xs-12 col-sm-8 col-md-6 col-lg-5 col-md-offset-2 gutter">
			<p><span class="h3">Broadway supports,</span> partners with, sponsors, and donates to local organizations and events including:</p>
			<ul class="list--indented gutter">
				<?php if (have_rows('broadway_supports')): while (have_rows('broadway_supports')) : the_row(); ?>
					<li><?php echo get_sub_field('item'); ?></li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		<div class="col-sm-3">
			<div class="cover image2 md-show unveil" data-class="door"></div>
			<div class="cover image2 bg-center mt1 md-show unveil" data-class="dog-jar"></div>
		</div>
	</div>
	<div class="row mt3 center-xs">
		<div class="col-xs-4 col-sm-3 col-md-2">
			<img class="business-icon" alt="Buy Where You Ride" data-src="http://broadwaybicycleschool.com/images/BWYR-Logo-Standard.png"/>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-2">
			<img class="business-icon" alt="Business for Fair Minimum Wage" data-src="http://broadwaybicycleschool.com/images/fair-minimum-logo.png"/>
		</div>
		<div class="col-xs-4 col-sm-3 col-md-2">
			<img class="business-icon" alt="United States Federation of Worker Cooperatives" data-src="http://broadwaybicycleschool.com/images/usworkerlogo.png"/>
		</div>
	</div>
</section>
<div class="section-margin">
	<div class="cover col-md-8 image1 md-hide unveil" data-class="interior"></div>
</div>
<section class="row mt2">
	<div class="col-xs-0 col-sm-2"></div>
	<div class="col-xs-12 col-md-8 col-lg-5 gutter">
		<h2 class="h1"><span class="tilt-l">Latest News</span></h2>
		<?php
        $args = array(
        'posts_per_page' => 1,
        'post_type' => 'post'
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post(); ?>
		<article>
			<h1 class="h2"><?php echo the_title(); ?></h1>
			<p class="footnote">Posted June 9th, 2017</p>
			<?php echo the_content(); ?>
		</article>

		<?php endwhile; wp_reset_query(); ?>

		<div class="xs-only-tc"><a class="btn mt2" href="<?php echo get_page_link(4425) ?>">More Posts</a></div>
	</div>
</section>
<div class="col-xs-12 section-margin"></div>

<?php get_footer(); ?>
