<?php
/*
Template Name: Classes
*/
?>
<?php get_header(); ?>

<div class="main-nav-spacer"></div>

<h1 class="visually-hidden"><?php the_title(); ?></h1>

<section class="relative">
  <div class="row ">
    <div class="col-xs-12 col-md-3 md-tr md-mb1 gutter">
      <h2 class="h1 tilt-l">Upcoming <span class="large-db">Classes</span></h2>
    </div>
    <div class="col-xs-12 col-md-9 events">
      <div class="row">
        <?php echo do_shortcode('[ESPRESSO_EVENTS show_sold_out=false]'); ?>
      </div>
    </div>

  </div>
</section>
<section class="row section-margin">
  <div class="col-xs-12 col-sm-8">
    <div class="cover image1 unveil" data-class="tools"></div>
  </div>
  <div class="col-xs-12 col-md-7">
    <article class="row mt2 gutter">
      <div class="col-xs-12 col-md-offset-3">
        <h2 class="h1"><span class="tilt-r">Class </span> &amp;
        <span class="tilt-l">Seminar Descriptions</span>
        </h2>
      </div>
    </article>

    <?php if (have_rows('class_descriptions')):
      while (have_rows('class_descriptions')) : the_row();
        $name =  get_sub_field('name');
        $id = str_replace(' ', '', $name) ?>
        <article id="<?php echo $id; ?>" class="row mt2 gutter">
          <div class="col-xs-12 col-sm-3 md-tr pr1">
            <h2 class="h2"><?php echo $name; ?></h2>
          </div>
          <div class="col-xs-12 col-sm-8">
            <p><?php echo get_sub_field('description'); ?></p>
            <p>Topics include</p>
            <ul class="list--indented">
            <?php while (have_rows('topics')) : the_row();
              echo '<li>' . get_sub_field('topic') . '</li>';
            endwhile; ?>
            </ul>
          </div>
        </article>
      <?php endwhile;
    endif;?>

  </div>
  <div class="col-xs-12 col-md-5 col-md-offset-0 col-lg-4 col-lg-offset-1">
    <aside class="pt2 pb2 col-sm-8 col-sm-offset-3 col-md-12 gutter">
      <h1 class="h3">A few things to know about our classes</h1>
      <?php if (have_rows('classes_about')):
        echo '<ul class="list--indented">';
        while (have_rows('classes_about')) : the_row();
          echo '<li>' . get_sub_field('item') . '</li>';
        endwhile;
        echo '</ul>';
      endif; ?>
    </aside>
    <aside class="pt2 pb2 col-sm-8 col-sm-offset-3 col-md-12">
      <div class="cover image2" style="background-image:url(<?php bloginfo('template_url'); ?>/images/class-women.jpg);"></div>
      <div class="gutter">
        <?php if (get_field('ftw_title')):  ?>
          <h1 class="h3 mt2"><?php echo get_field('ftw_title'); ?></h1>
          <p><?php echo get_field('ftw_description'); ?></p>
        <?php endif; ?>
      </div>
    </aside>
    <aside class="pt2 pb2 col-sm-8 col-sm-offset-3 col-md-12">
      <div class="cover image2 mt2" style="background-image:url(<?php bloginfo('template_url'); ?>/images/class-offsite.jpg);"></div>
      <div class="gutter">
        <h1 class="h3 mt2">Offsite Lessons</h1>
        <p>We also do off site work—Companies, events and organizations can hire us for events or on location trainings and/or tune-ups.</p>
        <a class="btn mt1" href="mailto:broadway@broadwaybicycleschool.com">Contact Us</a>
      </div>
    </aside>
  </div>
</section>
<div class="col-xs-12 section-margin"></div>

<?php get_footer(); ?>
