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

  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?>>
  
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <div class="overlay overlay--loading" style="position: fixed;width: 100vw;height: 100vh;background: white;z-index: 99;">
    <div style="width:100px;height:100px;position:absolute;left:50%;top:50%;margin-left:-50px;margin-top:-50px;">
      Loading...
    </div>
  </div><!-- .overlay -->

  <div class="navigation">
    <a class="navigation__item j-navigation-toggle" href="#">Nav Item</a>
  </div>

  <div class="hamburger j-navigation-toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>