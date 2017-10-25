<?php



if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
    ));


	  register_sidebar(array(1,
	    'name'=>'secondary',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));


  register_sidebar(array(1,
	    'name'=>'gallery',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));

}
//post thumbs
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions (cropped)


// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 240, 9999 ); //240 pixels wide (and unlimited height)


if ( ! isset( $content_width ) )
    $content_width = 620;

}



//Add Footer Widgets
register_sidebar(array(
  'name' => 'Footer Widgets',
  'description' => 'Widgets in this area will be shown on the footer',
  'before_widget' => '<div class="footerWidgets">',
  'after_widget' => '</div>',
  'before_title' => '<h5>',
  'after_title' => '</h5>',));

//Run Shortcodes in Widgets
add_filter('widget_text', 'do_shortcode');

//Clean Up Head
remove_action('wp_head', 'feed_links_extra', 3); // Displays the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Displays the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Displays the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Displays the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
remove_action('wp_head', 'parent_post_rel_link'); // prev link
remove_action('wp_head', 'start_post_rel_link'); // start link
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // Displays relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Displays the XHTML generator that is generated on the wp_head hook, WP version


function remove_menus()
{
    global $menu;
    global $current_user;
    get_currentuserinfo();

 $_menu_remove_users = array( 'Classes', 'jsanford' );
    if( in_array( $current_user->user_login, $_menu_remove_users ) )
    {
        $restricted = array(__('Links'),
                            __('Plugins'),
							__('Media'),
							__('Comments'),
							__('Tools'),
							__('Users'),
							__('Settings'),


        );
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }// end while


    }// end if
}
add_action('admin_menu', 'remove_menus');



//------------------- Removes hidden submenus for admin when in need ----------------------

function remove_submenus() {
  global $submenu;
    unset($submenu['index.php'][10]); // Removes 'Updates'.
	 unset($submenu['themes.php'][5]); // Removes 'Themes'.
	 unset($submenu['themes.php'][10]); // Removes 'Themes'.
	 	unset($submenu['options-general.php'][15]); // Removes 'Writing'.
    unset($submenu['options-general.php'][25]); // Removes 'Discussion'.
	unset($submenu['edit.php?post_type=page'][10]); // Removes 'Discussion'.
}
add_action('admin_menu', 'remove_submenus');

//-----------------------------------------


//------------------- Hides appearance editor ----------------------
function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}

add_action('_admin_menu', 'remove_editor_menu', 1);

//------------------- Hides widgets ----------------------
function remove_some_wp_widgets(){

    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
}

add_action('widgets_init',remove_some_wp_widgets, 1);

// -----  get string between two points ----
function get_string_between($string, $start, $end){
	$string = ' ' . $string;
	$ini = strpos($string, $start);
	if ($ini == 0) return '';
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return substr($string, $ini, $len);
}
?>
