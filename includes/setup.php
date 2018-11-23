<?php


// Enqueue Stylesheets
function enqueue_styles() {
  wp_enqueue_style('theme-stylesheet',  get_bloginfo( 'stylesheet_directory' ) . '/build/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles', 99 );


// Enqueue Scripts and add localization of WP vars
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










