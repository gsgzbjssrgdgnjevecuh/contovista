<?php
 
//  function custom_post_type() {
  
//   // Set UI labels for Custom Post Type
//   $labels = array(
//     'name'                => _x( 'Testimonials', 'Post Type General Name', 'contovista' ),
//     'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'contovista' ),
//     'menu_name'           => __( 'Testimonials', 'contovista' ),
//     'parent_item_colon'   => __( 'Parent Testimonial', 'contovista' ),
//     'all_items'           => __( 'All Testimonials', 'contovista' ),
//     'view_item'           => __( 'View Testimonial', 'contovista' ),
//     'add_new_item'        => __( 'Add New Testimonial', 'contovista' ),
//     'add_new'             => __( 'Add New', 'contovista' ),
//     'edit_item'           => __( 'Edit Testimonial', 'contovista' ),
//     'update_item'         => __( 'Update Testimonial', 'contovista' ),
//     'search_items'        => __( 'Search Testimonial', 'contovista' ),
//     'not_found'           => __( 'Not Found', 'contovista' ),
//     'not_found_in_trash'  => __( 'Not found in Trash', 'contovista' ),
//   );
        
//   // Set other options for Custom Post Type
        
//   $args = array(
//     'label'               => __( 'testimonials', 'contovista' ),
//     'description'         => __( 'Testimonial news and reviews', 'contovista' ),
//     'labels'              => $labels,
//     // Features this CPT supports in Post Editor
//     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//     // You can associate this CPT with a taxonomy or custom taxonomy. 
//     'taxonomies'          => array( 'testimonials' ),
//     /* A hierarchical CPT is like Pages and can have
//     * Parent and child items. A non-hierarchical CPT
//     * is like Posts.
//     */
//     'hierarchical'        => false,
//     'public'              => true,
//     'show_ui'             => true,
//     'show_in_menu'        => true,
//     'show_in_nav_menus'   => true,
//     'show_in_admin_bar'   => true,
//     'menu_position'       => 5,
//     'can_export'          => true,
//     'has_archive'         => true,
//     'exclude_from_search' => false,
//     'publicly_queryable'  => true,
//     'capability_type'     => 'post',
//     'show_in_rest' => true,
//     'taxonomies' => ['testimonial'],

//   );

    
//   // Registering your Custom Post Type
//   register_post_type( 'testimonials', $args ); 
    
//   }
    
//   /* Hook into the 'init' action so that the function
//   * Containing our post type registration is not 
//   * unnecessarily executed. 
//   */
    
//   add_action( 'init', 'custom_post_type', 0 );

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
          'add_new'             => __( 'Add New', 'contovista' ),
          'edit_item'           => __( 'Edit Testimonial', 'contovista' ),
          'update_item'         => __( 'Update Testimonial', 'contovista' ),
          'search_items'        => __( 'Search Testimonial', 'contovista' ),
          'not_found'           => __( 'Not Found', 'contovista' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'contovista' ),
        ),
      'public'              => true,
      'publicly_queryable'  => true,
      'has_archive'         => false,
      'rewrite'             => array('slug' => $data['press_slug']),
      'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes'),
      'can_export'          => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,

      'label'               => __( 'testimonials', 'contovista' ),
      'description'         => __( 'Testimonial news and reviews', 'contovista' ),      
      'hierarchical'        => false,
      'exclude_from_search' => false,
      'capability_type'     => 'post',
      'show_in_rest' => false,
    )
  );
  register_taxonomy('testimonials_category', 'testimonials', array('hierarchical' => true, 'label' => 'Categoriess', 'query_var' => true, 'rewrite' => true));

}
add_action('init', 'testimonials_post_type');