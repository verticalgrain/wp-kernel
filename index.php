<?php get_header(); ?>
  
  <h1>Helloooooooo</h1>

  <p>This is the wp-kernel index.php file</p>

  <h2>Posts:</h2>

  <?php
    while ( have_posts() ) : the_post();

      get_template_part('templates/post-tease','');
      
    endwhile;
  ?>
  
<?php get_footer(); ?>