<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

<h1>
<?php
  the_content();
?>
</h1>
  






<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif; ?>
<?php 

get_footer();

?>




