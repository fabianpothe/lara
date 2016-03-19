<?php


if ( ! isset( $content_width ) ) $content_width = 1170;

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

if ( ! is_admin() ) {
	//You are viewing the theme


} else {
    //You are viewing the WordPress Administration Panels
}


 add_action( 'wp_enqueue_scripts', 'safely_add_scripts' );
  /**     * Add stylesheet to the page     */
    function safely_add_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/style.php/_bootstrap.scss' );
  wp_enqueue_style( 'lara', get_template_directory_uri().'/style.php/_lara.scss' );
	//wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/lib/font-awesome.min.css' );
	 wp_enqueue_style( 'custom-style', get_stylesheet_uri());

	  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3-respond-1.4.2.min.js',array(),'2.8.3', false);
	 wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.2.min.js',array(),'1.11.2', true );
	 wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'', true );
	/* wp_enqueue_script( 'equinox', get_template_directory_uri() . '/lib/equinox.js','','', true );
*/
  }

// Register Custom Navigation Walker
require_once('assets/wp_bootstrap_navwalker.php');

register_nav_menus( array(
  'primary' => __( 'Primary Menu',      'lara' ),
  'primary-right' => __( 'Primary Menu Rights',      'lara' ),
  'social'  => __( 'Social Links Menu', 'lara' ),
) );


add_action( 'widgets_init', 'theme_equinox_widgets_init' );

function theme_equinox_widgets_init() {
	register_sidebar(
		array(
		    'id'          => 'sidebar-a',
		    'name'        => __( 'Sidebar A' ),
		    'description' => __( 'This sidebar is located next the page content.'),
		)
	);

	register_sidebar(
		array(
		    'id'          => 'sidebar-b',
		    'name'        => __( 'Sidebar B'),
		    'description' => __( 'This sidebar is located next the page content.'),
		)
	);

	register_sidebar(
		array(
		    'id'          => 'intro',
		    'name'        => __( 'Intro'),
		    'description' => __( 'The intro is located above the homepage. Eg for full size slider etc.'),
		)
	);

	register_sidebar(
		array(
		    'id'          => 'banner',
		    'name'        => __( 'Banner'),
		    'description' => __( 'This banner is located above the page content.'),
		)
	);
}


   function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
  }
}
