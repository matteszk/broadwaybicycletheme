<?php
/*
Template Name: Stand Rentals
*/
?>
<?php get_header('2017'); ?>


<div class="main-nav-spacer"></div>
<h1 class="visually-hidden">Stand Rental</h1>
<section class="relative">
  <div class="row">
    <div class="col-xs-12 col-md-5 col-md-offset-2 mb1 gutter">
      <h1><span class="tilt-l">Stand</span> <span class="tilt-r">Rental</span></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-5 col-md-offset-2 col-lg-4 gutter">
      <p>Access to our tools and the truing stands.</p>
      <p>Stand rental and instruction hours are subject to stand and mechanic availability, as well as holiday hours. <a href="tel:+16178683392">Call ahead</a> to confirm.</p>
      <p>Some speciality tools are only available with instruction and incur instruction hourly rate. Some tools are not available at all. <a href="tel:+16178683392">Call ahead</a> if you need a speciality tool.</p><h2 class="mt2">Hours for <span class="tilt-r">Stand</span> Rental & <span class="tilt-l">Instruction</span></h2>
      <table class="mt1">
      <tr>
      <td>Monday&ndash;Wednesday</td>
      <td>10&ndash;4</td>
      </tr>
      <tr>
      <td>Thursday</td>
      <td>11&ndash;4:30</td>
      </tr>
      <tr>
      <td>Friday</td>
      <td>11&ndash;4</td>
      </tr>
      <tr>
      <td>Saturday</td>
      <td>10:30&ndash;5:00</td>
      </tr>
      <tr>
      <td>Sunday</td>
      <td>12:30&ndash;4:00</td>
      </tr>
      </table>
      <h2 class="mt2 mb1">Rates</h2>
      <?php if(  have_rows('stand_rental_rates') ):
        echo '<table>';
        while ( have_rows('stand_rental_rates') ) : the_row();
          echo '<tr><td>' . get_sub_field('type') . '</td><td>' . get_sub_field('price') . '</td</tr>';
        endwhile;
        echo '</table>';
      endif; ?>
      <p class="mt1 footnote pb2"><span class="asterix">*</span>Rates are charged in 5 minute increments.</p></p>
    </div>
    <aside class="col-xs-12 col-sm-4 col-md-4 col-md-offset-1 pa0">
      <div class="cover image2 lg-image2 bg-top" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bettina.jpg);"></div>
      <div class="cover sm-image-tall mt1 lg-show bg-top teaching-2"></div>
    </aside>
  </div>
</section>

<?php get_footer('2017'); ?>
