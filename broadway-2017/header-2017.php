<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">

<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

<script src="<?php bloginfo('template_url'); ?>/js/main.min.js"></script>
<!-- <script src="/js/cufon-yui.js" type="text/javascript"></script>
<script src="/js/behaviors.js" type="text/javascript"></script> -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23039201-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>
<body <?php body_class(); ?>>
<div id="content">
<header>

  <div class="main-nav">
    <div class="main-nav-bg"></div>
    <button class="menu-toggle fa fa-window-close" id="main-nav-close"></button>
    <nav>
      <ul>
        <li> <a class="accent-font" href="index.html">Broadway Bicycle</a></li>
      <?php
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( 'Menu 2017'  );
        $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
         foreach( $menuitems as $item ):
           echo '<li><a href="' . $item->url . '">' . $item->title . '</a></li>';
         endforeach;
      ?>
      </ul>
    </nav>
  </div>
<!--
<?php wp_nav_menu( array(
    'menu'   => 'Menu 2017'
  ));?> -->
</header>
