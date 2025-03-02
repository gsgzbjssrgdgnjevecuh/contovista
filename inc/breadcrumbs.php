<?php 

/**
 * Allow changing or removing the Breadcrumb items
 *
 * @param array       $crumbs The crumbs array.
 * @param Breadcrumbs $this   Current breadcrumb object.
 */


add_filter( 'rank_math/frontend/breadcrumb/items', function( $crumbs, $class ) {
   
  if( is_singular('post') && $terms = wp_get_object_terms( get_the_id(), 'category' ) ) {

    $parentName = '';
    $parentLink = '';

    $pageName = '';
    $pageLink = '';

    foreach ( $terms as $term ) {
      $page = get_field('page_link_for_the_category', 'category_'.$term->term_id);
      if( $page ){ 
        $pageName = get_the_title( $page->ID );
        $pageLink = get_permalink( $page->ID );

        if( $page->post_parent ){
          $parentName = get_the_title( $page->post_parent );
          $parentLink = get_permalink( $page->post_parent );
        }
      }
    }


    if( $pageLink ){
      if( $pageLink && $parentLink ){
        // relocate curent page to new index
        $crumbs[3][0] = $crumbs[2][0];
        $crumbs[3][1] = $crumbs[2][1];

        // set new parent page
        $crumbs[1][0] = $parentName;
        $crumbs[1][1] = $parentLink;

        // set parent of parent page :)
        $crumbs[2][0] = $pageName;
        $crumbs[2][1] = $pageLink;

      }else{
        // set new parent page
        $crumbs[1][0] = $pageName;
        $crumbs[1][1] = $pageLink;
      }

      return $crumbs;
    }
  }

  return $crumbs;  

}, 10, 2);   
 