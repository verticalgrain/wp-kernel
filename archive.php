 <?php get_header(); ?>

  <?php
    while ( have_posts() ) : the_post();

      get_template_part('templates/post-tease','');
      
    endwhile;
  ?>
  
<?php get_footer(); ?>