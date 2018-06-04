<?php


// Enqueue Stylesheets
function enqueue_styles() {
  wp_enqueue_style('theme-stylesheet',  get_bloginfo( 'stylesheet_directory' ) . '/build/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles', 99 );


// Enqueue Scripts
function enqueue_scripts() {

  // Enqueue main JS script file in head
  wp_enqueue_script('basic-head', get_bloginfo('template_directory') . '/build/js/app.js' , array('jquery'), '1.0', false);

  // Localization of WP vars
  global $wp_query;

  $wp_object = array(
    'stylesheetDirectory' => get_bloginfo('stylesheet_directory'),
    'url' => get_bloginfo('url'),
    'json_url' => esc_url_raw( rest_url() ),
    'json_url_full' => esc_url_raw( rest_url() ) . 'wp/v2/',
    'ajaxurl' => admin_url( 'admin-ajax.php'),
    'nonce' => wp_create_nonce( 'load-more-nonce' ),
    'nonceshoppinglist' => wp_create_nonce( 'wp_rest' ),
    'query' => $wp_query->query,
    'current_user_id' => get_current_user_id()
  );

  wp_localize_script('basic-head', 'dossier', $wp_object);

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// Clean up <head> and improve security.
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('show_admin_bar', '__return_false');


// Register Menus
function register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menu' );


// Register Sidebar
function theme_slug_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'theme-slug' ),
    'id' => 'sidebar-1',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="widgettitle">',
    'after_title'   => '</div>',
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );


// Change default excerpt Length
function wpdocs_custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Change default more
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Customize the search form markup
function html5_search_form( $form ) {
  $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
  <label class="screen-reader-text" for="s">' . __('Search',  'dossier-internal') . '</label>
  <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" />
  <input type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'dossier-internal') .'" />
  </form></section>';
  return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );