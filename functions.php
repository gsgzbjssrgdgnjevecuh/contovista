<?php
/**
 * Lodgease functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cv
 */

// Register menu
add_action( 'after_setup_theme', 'cv_theme_setup' );
function cv_theme_setup() {
  register_nav_menus(array( 
    'primary' => __('Primary menu'),
    'secondary' => __('Secondary menu'),
  ));
};
// Register menu  

// Add description to menu items
add_filter('nav_menu_item_title', function($title, $item, $args){
	$title = '<span>'.$title.'</span>';
	if( $item->description ){
		$title .= '<span class="menu-item-description">' . $item->description . '</span>';
	}
	return $title; 
}, 10, 3);
// Add description to menu items


// Class for li in menu
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
// Class for li in menu


// Enqueue scripts & styles
add_action( 'wp_enqueue_scripts', 'ch_scripts' ); 
function ch_scripts() {
  wp_enqueue_style( 're-styles', get_template_directory_uri() . '/static/css/main.css', '1.0.8');  
  wp_enqueue_script( 're-libs', get_template_directory_uri() . '/static/js/libs.min.js', [], '1.0.0', true );
  wp_register_script( 're-scripts', get_template_directory_uri() . '/static/js/main.js', [], '1.0.1', true );
  
  
  // wp_enqueue_script( 're-google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDtE1EVvCuNNr2V8uNIV-pzjK00V_XYSJY&callback=initMap&v=weekly', [], '1.0.0', true );
  // wp_script_add_data( 're-google-maps-api', 'defer' , true ); 

  
  // AJAX url
  wp_localize_script( 're-scripts', 'contovista', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )) );
  wp_enqueue_script('re-scripts');
}
// Enqueue scripts & styles 

 // Admin styles
 add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
 function load_custom_wp_admin_style() {
   wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/static/css/admin.css', false, '1.0.0' );
   wp_enqueue_style( 'custom_wp_admin_css' );
 }
// Admin styles


// Custom categories for Guttenberg blocks
function contovista_custom_blocks( $categories ) {
  return array_merge( 
    $categories,
    array(
      array(
      'slug' => 'cv-blocks',
      'title' => __( 'Contovista Blocks', 'cv-blocks' )
      ),
    )
  );
}
add_filter( 'block_categories_all', 'contovista_custom_blocks', 10, 2 );
// Custom categories for Guttenberg blocks

// Thumbnails 
add_theme_support( 'post-thumbnails' );
// Thumbnails 

// Options page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
  if( function_exists('acf_add_options_page') ) {

    // Register options page.
    $option_page = acf_add_options_page(array(
      'page_title'    => __('Contovista Settings'),
      'menu_title'    => __('Contovista Settings'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
    ));
  }
}
// Options page

// Google API key for ACF
function initGoogleAPI() {
  acf_update_setting('google_api_key', 'AIzaSyDtE1EVvCuNNr2V8uNIV-pzjK00V_XYSJY');
}
add_action('acf/init', 'initGoogleAPI');
// Google API key for ACF


// Image sizes
add_action( 'after_setup_theme', 'contovista_theme_setup' );
function contovista_theme_setup() {
  add_image_size( 'logo', 300, 9999, false ); 
  add_image_size( 'demo', 1256, 9999, false );  
  add_image_size( 'story-small', 776, 9999, false );     
  
	add_image_size( 'circle-thumb', 300, 300, true); 
  add_image_size( 'product-tabs', 1472, 1194, true );  
  add_image_size( 'scrollcopy', 1256, 700, true );  
  add_image_size( 'image', 2120, 1182, true );  
  add_image_size( 'image-copy', 2120, 1182, true );  
  add_image_size( 'story', 1040, 1320, true );  
  add_image_size( 'article', 824, 436, true );   
  add_image_size( 'history-slider', 824, 436, true );    
 
}
// Image sizes


// INCLUDES 

// Acf
require get_template_directory() . '/inc/acf-functions/acf-functions.php';

// Taxonomies
require get_template_directory() . '/inc/taxonomies.php';

// Breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';

// Ajax
require get_template_directory() . '/inc/ajax/load-more-posts.php';
require get_template_directory() . '/inc/ajax/load-more-team-members.php';
 