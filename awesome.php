<?php  

/*
Template Name: Awesome
*/ 

  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>




<!-- <?php the_content(); ?> -->


<h1>this is a pages template file called awesome.php - you can get to it via the pages tab in the WPD and select the 'template' dropdown menu and choose 'awesome'
</h1>



<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


