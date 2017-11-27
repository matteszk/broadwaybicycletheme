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

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="/wp-content/themes/broadway/style.css" type="text/css" media="screen, projection" />
<!--[if IE]>
<link rel="stylesheet" href="/wp-content/themes/broadway/ie.css" type="text/css" media="screen, projection" />
<![endif]-->

<script src="/js/cufon-yui.js" type="text/javascript"></script>
 <script src="/js/behaviors.js" type="text/javascript"></script>


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


<nav>
<ul id="topNav">
<li class="home"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></li>
  <?php wp_list_pages('title_li=&exclude=33,34,35,502,572,574,4425,4357,573,575,4288,4295,4298,4301,4293'); ?>
</ul>
</nav></header>
