<?php

function testimonials_post_type() {

  register_post_type(
    'testimonials',
      array(
        'labels' => array(
          'name'                => _x( 'Testimonials', 'Post Type General Name', 'contovista' ),
          'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'contovista' ),
          'menu_name'           => __( 'Testimonials', 'contovista' ),
          'parent_item_colon'   => __( 'Parent Testimonial', 'contovista' ),
          'all_items'           => __( 'All Testimonials', 'contovista' ),
          'view_item'           => __( 'View Testimonial', 'contovista' ),
          'add_new_item'        => __( 'Add New Testimonial', 'contovista' ),
          'add_new'             => __( 'Add New Testimonial', 'contovista' ),
          'edit_item'           => __( 'Edit Testimonial', 'contovista' ),
          'update_item'         => __( 'Update Testimonial', 'contovista' ),
          'search_items'        => __( 'Search Testimonial', 'contovista' ),
          'not_found'           => __( 'Not Found', 'contovista' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'contovista' ),
        ),
      'public'              	=> true,
      'publicly_queryable'  	=> true,
      'has_archive'         	=> false,
      //'rewrite'             	=> array('slug' => $data['press_slug']),
      'supports'            	=> array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes'),
      'can_export'          	=> true,
      'show_ui'             	=> true,
      'show_in_menu'        	=> true,
      'show_in_nav_menus'   	=> true,
      'show_in_admin_bar'   	=> true,
      'menu_position'       	=> 5,

      'label'               	=> __( 'testimonials', 'contovista' ),
      'description'         	=> __( 'Testimonial news and reviews', 'contovista' ),      
      'hierarchical'        	=> false,
      'exclude_from_search' 	=> false,
      'capability_type'     	=> 'post',
			
      'show_in_rest' 					=> true,
			'taxonomies'          => array( 'testimonials' ),
			'rest_base'    					=> 'category',
    )
  );
  register_taxonomy('testimonials', 'testimonials', array(
    'hierarchical' => true, 
    'label' => 'Testimonials categories', 
    'show_in_rest' => true,
    'query_var' => true, 
    'rewrite' => true,
    'public' => true,
  ));

}
add_action('init', 'testimonials_post_type');


function create_post_type(  string $singular = 'Post name', 
                            string $plural = 'Post names', 
                            string $menu_icon = 'dashicons-admin-post',
                            bool $hierarchical = FALSE, 
                            bool $has_archive = TRUE, 
                            string $description = '' ) {

  register_post_type( $singular, array(
    'public'            => TRUE,
    'show_in_rest'      => TRUE,
    'description'       => $description,
    'menu_icon'         => $menu_icon,
    'hierarchical'      => $hierarchical,
    'has_archive'       => $has_archive,
    'supports'          => array('title', 'editor', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'comments'),

    'show_in_rest' 					=> true,
    'taxonomies'          => array( $singular ),
    'rest_base'    					=> $plural,

    'menu_position'       	=> 5,  
    'labels' => array(
      'name'                      => $plural,
      'singular_name'             => $singular,
      'add_new'                   => 'Add New '.$singular,
      'add_new_item'              => 'New '.$singular,
      'edit_item'                 => 'Edit '.$singular,
      'view_item'                 => 'View '.$singular,
      'view_items'                => 'View '.$plural,
      'search_items'              => 'Search '.$plural,
      'not_found'                 => 'No '.$plural.' Found',
      'all_items'                 => 'All '.$plural,
      'archives'                  => $plural.' Archives',
      'attributes'                => $singular.' Attributes',
      'insert_into_item'          => 'Insert into '.$singular,
      'uploaded_to_this_item'     => 'Uploaded to this '.$singular,
      'featured_image'            => $singular.' Featured image',
      'set_featured_image'        => 'Set '.$singular.' featured image',
      'remove_featured_image'     => 'Remove '.$singular.' featured image',
      'use_featured_image'        => 'Use as '.$singular.' featured image',
      'filter_items_list'         => 'Filter '.$plural.' list',
      'filter_by_date'            => 'Filter '.$plural.' by date',
      'items_list_navigation'     => $plural.' list navigation',
      'items_list'                => $plural.' list',
      'item_published'            => $singular.' published.',
      'item_published_privately'  => $singular.' published privately.',
      'item_reverted_to_draft'    => $singular.' reverted to draft.',
      'item_scheduled'            => $singular.' scheduled.',
      'item_updated'              => $singular.' updated.',
      'item_link'                 => $singular.' link'
    ),

    'rewrite'           => array(
        'slug'                      => strtolower($plural),
        'pages'                     => TRUE,
    )
  ));
    
}
function custom_cpts() {
  create_post_type('Team-member', 'Team-members','dashicons-admin-post');
  create_post_type('Story', 'Stories', 'dashicons-admin-post');
}

add_action( 'init', 'custom_cpts' );

function cv_create_taxonomies() {

	register_taxonomy('team-member', 'team-member', array(
    'hierarchical' => true, 
    'label' => 'Team-members categories', 
    'show_in_rest' => true,
    'query_var' => true, 
    'rewrite' => true,
    'public' => true,
  ));
	register_taxonomy('story', 'story', array(
    'hierarchical' => true, 
    'label' => 'Stories categories', 
    'show_in_rest' => true,
    'query_var' => true, 
    'rewrite' => true,
    'public' => true,
  ));
}
add_action( 'init', 'cv_create_taxonomies', 0 );