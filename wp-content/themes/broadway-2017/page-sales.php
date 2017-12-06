<?php
/*
Template Name: Sales
*/
?>
<?php get_header(); ?>

<div class="relative vh-header">
  <div class="absolute bg--fixed cover h100 bg-bottom unveil" data-class="storefront"></div>
</div>

<div class="row relative mt3">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-3 col-md-offset-1 gutter">
    <h1 class=""><span class="tilt-l">Sales</span> &amp; <span class="tilt-r">Rentals</span></h1>
    <div class="">
      <?php echo get_post_field('post_content', $post->ID) ?>
    </div>
  </div>
  <ul class="mt2 md-mt0 row col-xs-12 col-sm-10 col-sm-offset-1 col-md-7 col-lg-5 col-md-offset-1 middle-xs">
    <?php if( have_rows('brands') ): while ( have_rows('brands') ) : the_row();
        $image = get_sub_field('logo');
        ?>
        <li class="pa-grid col-xs-6 col-sm-4">
          <a href="<?php echo get_sub_field('url'); ?>">
            <img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"/>
          </a>
        </li>
        <?php
    endwhile; endif; ?>
  </ul>
</div><div class="bg--fixed" style="background-image: url('<?php bloginfo('template_url'); ?>/images/temp-brompton.jpg')"></div>
<section class="row section-margin">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-3 col-md-offset-1">
    <div class="cover image-tall bg-bottom unveil" data-class="brompton-2"></div>
  </div>
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 gutter mt2 md-mt0">
    <h2>Boston’s Brompton Specialists</h2>
    <p>For many urban dwellers, a folding bike just makes sense.  Brompton Bicycles are the best city folding bikes that we’ve ever seen or serviced.  They fit nicely into cozy apartments, travel with ease on public transportation, and still ride with enough zip and agility to get you around in style.  Since 2009, we’ve been helping people build and customize their ideal Bromptons, and providing expert repairs and service to keep them on the road for years and years.  Come in and let us show you how easily they fit into your life.</p><a class="btn mt1" href="stand-rental.html">Order Yours</a>
  </div>
</section>
<div class="section-margin row">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-2 gutter">
    <h2><?php echo get_field('rental_title'); ?></h2>
    <p><?php echo get_field('rental_description'); ?></p>

    <?php if( have_rows('rental_pricing') ):
      echo '<table class="mt1">';
      while ( have_rows('rental_pricing') ) : the_row();
        echo '<tr class="pt1"><td>' . get_sub_field('label') . '</td><td>' . get_sub_field('price') . '</td></tr>';
      endwhile;
      echo '</table>';
    endif; ?>
  </div>
  <div class="md-show col-md-4 col-md-offset-1">
    <div class="cover image1 bg-top" style="background-image: url(<?php bloginfo('template_url'); ?>/images/brompton-duo.jpg);"></div>
  </div>
</div>

<?php get_footer(); ?>
