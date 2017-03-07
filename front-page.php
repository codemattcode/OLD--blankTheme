<!-- Header including Meta Info -->
<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 

  // the_content();
?>

        
<!-- Page content -->
<?php the_content(); ?>
  



<!-- Error if page not found -->
<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif; 
?>


<!--  Footer content -->
<?php get_footer(); ?>



