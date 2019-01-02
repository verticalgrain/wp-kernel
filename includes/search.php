<?php


// Customize the search form markup
function html5_search_form( $form ) {
  $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . esc_url( home_url( '/' ) ) . '" >
  <label class="screen-reader-text" for="s">' . __('Search',  'wp-kernel') . '</label>
  <input type="search" value="' . esc_attr( get_search_query() ) . '" name="s" id="s" placeholder="Search" />
  <input type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'wp-kernel') .'" />
  </form></section>';
  return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );