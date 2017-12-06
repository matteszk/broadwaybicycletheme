<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>

<div class="main-nav-spacer">
</div>
<main class="relative">
  <div class="row">
    <div class="gutter col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-1">
      <h1><span class="tilt-l">Repairs,</span> Builds, & <span class="tilt-l">Tune-ups</span></h1>
      <p>When you choose Broadway Bicycle for maintenance, fixes, or builds, you’re getting 45 years of experience fixing and building.</p>
      <p>Every job we do—from fixing a flat to a full tune up—is double checked by a second mechanic. In addition, we test ride your bike two times: both the mechanic and a test rider who looks the work over take your bike for a ride before we hand it back
        to you.</p>
      <p>Additionally, you are supporting an environmentally conscious community space that actively promotes diversity in the biking community, values empowerment through education, and supports social justice work in the Boston area.</p>
    </div>
    <div class="md-show col-md-4 col-md-offset-1">
      <div class="cover image-tall unveil" data-class="working-3"></div>
    </div>
  </div>
  <div class="row mt2">
    <div class="col-xs-12 col-md-4 col-md-offset-1 md-pr2">
      <div class="cover image2 lg-image1 bg-bottom unveil" data-class="tire-repair"></div>
    </div>
    <div class="col-xs-12 col-md-6 gutter mt1 pb2 md-mt0">
      <h2>Flat Repairs</h2>
      <p>Flats are a <i>drag</i>. Drop in for a <b>15 Minute Flat</b> and we’ll get you on your way pronto.</p>
      <p>We will inspect your tire for the offending object, check your rim strip and tire for damage, install a new tube and make sure your chain is properly oiled too! A Basic flat-fix is $19 which includes labor and the new tube. </p>
    </div>
  </div>
  <div class="row bottom-xs">
    <div class="col-xs-12 col-md-5 col-md-offset-1 md-pr2 last-md">
      <div class="cover image2 md-image-tall" style="background-image: url(<?php bloginfo('template_url'); ?>/images/empty_oil.jpg);"></div>
    </div>
    <div class="gutter mt2 col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-1">
      <h2>Basic Tune-up</h2>
      <p>A basic tuneup is recommended once a year to maximize your bike’s performance and longevity.</p>
      <p>The price of the basic tuneup includes labor for the following</p>
      <?php if(  have_rows('basic_tune_up') ):
        echo '<ul class="list--indented">';
        while ( have_rows('basic_tune_up') ) : the_row();
          echo '<li>' . get_sub_field('item') . '</li>';
        endwhile;
        echo '</ul>';
      endif; ?>
      <p>Any parts replacement and installation are additional. We provide free estimates, so bring your bike in to learn more about your individual needs.</p>
    </div>
  </div>
  <div class="row mt3 pt2">
    <div class="md-show col-md-4 col-md-offset-2 pr2">
      <div class="cover image2 md-image-tall bg-bottom" style="background-image: url(<?php bloginfo('template_url'); ?>/images/wheel-building.jpg);"></div>
    </div>
    <div class="gutter col-xs-12 col-sm-8 col-md-5 col-lg-4">
      <h2>Custom Wheel Building</h2>
      <p>If you have your heart set on a custom set of wheels – let us build them for you! Do you long for a 700c wheel laced to a 3speed hub?</p>
      <p>Are you planning a tour and want a bombproof adventure? We will help you select your components (hubs, spokes, rims) and then professionally assemble them for you. Labor is $78.00 if you bring in your own parts, and $60 if you purchase your parts
        with us (parts cost additional). All handbuilt wheels come with a 30 day check-up and a 1 year warranty.</p>
    </div>
  </div>
</main>

<?php get_footer(); ?>
