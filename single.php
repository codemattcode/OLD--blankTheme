<!-- BLOG POSTS (INDIVIDUAL) -->
<?php    
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>



<article>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<!-- add feature image banner -->
<?php the_post_thumbnail('banner-image'); ?>

<p><?php the_content(); ?></p>
</article>












<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


