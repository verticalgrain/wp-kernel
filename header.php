<!doctype html>
<html lang="">
<head>
  <!--
       _               _           
      | |             (_)          
    __| | ___  ___ ___ _  ___ _ __ 
   / _` |/ _ \/ __/ __| |/ _ \ '__|
  | (_| | (_) \__ \__ \ |  __/ |   
   \__,_|\___/|___/___/_|\___|_|   
                                   
  -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <title></title>
  <meta name="description" content="">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- <script src="build/js/vendor/modernizr-custom.js"></script> -->

  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?>>
  
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu' ) ); ?>