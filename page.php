
<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


<div class="wrapper">
<div class="row">
  <div class="col-6">
<?php the_content(); ?>
  </div>
  <div class="col-6">
    <?php if (is_active_sidebar('sectionOneHero')) : ?>
    <div class="">
      <?php dynamic_sidebar('sectionOneHero'); ?>
    </div>
<?php endif; ?>
  </div>
</div><!-- /row -->
</div><!-- /wrapper -->


<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif; ?>



<?php 

get_footer();

?>





