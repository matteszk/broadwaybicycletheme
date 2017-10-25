<?php
/*
Template Name: Sales
*/
?>
<?php get_header('2017'); ?>

<div class="relative vh-header">
  <div class="absolute bg--fixed cover h100 bg-bottom" style="background-image: url('<?php bloginfo('template_url'); ?>/images/rack.jpg');"></div>
</div>

<div class="row relative mt3">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-3 col-md-offset-1 gutter">
    <h1 class="md-tr"><span class="tilt-l">Sales</span> &amp; <span class="tilt-r">Rentals</span></h1>
    <p>For decades, we’ve been helping people find the right bike for them.  Whether you’re looking for something simple to get to around town, a world-touring adventure machine, or something in the middle, we’re passionate about getting you on a bike that you’re excited to ride, mile after mile.</p>
    <p>We keep a wide variety of new and used parts and accessories on hand to get you properly outfitted for whatever two wheeled trip you’ve got planned.</p>
  </div>
  <ul class="mt2 md-mt0 row col-xs-12 col-sm-10 col-sm-offset-1 col-md-7 col-lg-5 col-md-offset-1 middle-xs">
    <?php
    if( have_rows('brands') ):
      while ( have_rows('brands') ) : the_row();
        $image = get_sub_field('logo');
        ?>
        <li class="pa-grid col-xs-6 col-sm-4">
          <a href="<?php echo get_sub_field('url'); ?>">
            <img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"/>
          </a>
        </li>
        <?php
      endwhile;
    else :
      // no rows found
    endif; ?>
  </ul>
</div><div class="bg--fixed" style="background-image: url('<?php bloginfo('template_url'); ?>/images/temp-brompton.jpg')"></div>
<section class="row section-margin">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-3 col-md-offset-1">
    <div class="cover image-tall bg-bottom" style="background-image: url(<?php bloginfo('template_url'); ?>/images/brompton-two.jpg);"></div>
  </div>
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 gutter mt2 md-mt0">
    <h2>Boston’s Brompton Specialists</h2>
    <p>For many urban dwellers, a folding bike just makes sense.  Brompton Bicycles are the best city folding bikes that we’ve ever seen or serviced.  They fit nicely into cozy apartments, travel with ease on public transportation, and still ride with enough zip and agility to get you around in style.  Since 2009, we’ve been helping people build and customize their ideal Bromptons, and providing expert repairs and service to keep them on the road for years and years.  Come in and let us show you how easily they fit into your life.</p><a class="btn mt1" href="stand-rental.html">Order Yours</a>
  </div>
</section>
<div class="section-margin row">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-2 gutter">
    <h2>Bike Rentals</h2>
    <p>Interested in a Brompton but not ready to take the plunge?  Take one on an extended test ride!  We offer rentals by the day or week, so you can really experience how they ride, fold, and make getting around the city so much simpler.  A helmet, lock, and lights are included with each rental bike.  If you decide to purchase after renting, up to a week of your rental fee will be applied to the cost of your new bike!</p>
    <table>
      <tr>
        <td>Daily</td>
        <td>$30</td>
      </tr>
      <tr>
        <td>Weekly</td>
        <td>$120</td>
      </tr>
    </table>
  </div>
  <div class="md-show col-md-4 col-md-offset-1">
    <div class="cover image1 bg-top" style="background-image: url(<?php bloginfo('template_url'); ?>/images/brompton-duo.jpg);"></div>
  </div>
</div>

<?php get_footer('2017'); ?>
