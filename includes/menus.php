<?php

// Register Menus
function register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menu' );


// Add classes to list items
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'navigation__item j-navigation-toggle';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);