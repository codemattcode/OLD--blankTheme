<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 

  // the_content();
?>


    <div class="wrapper">
<div class="row">
  
  <div class="col-6">
    
    <?php if (is_active_sidebar('section-one-hero')) : ?>
      <div class="widget">
        <?php dynamic_sidebar('section-one-hero'); ?>
      </div>
    <?php endif; ?>
    
  </div>

  <div class="col-6">
<?php the_content(); ?>
  </div>

</div><!-- /row -->
</div><!-- /wrapper -->



<div class="wrapper">
<div class="row">

<!-- conditional logic whether to display this custom content -->

    <?php if (get_theme_mod('ct-footer-callout-display') == "Yes") { ?>
          
        <div class="footer-callout">
          <div class="col-6">    
        <div class="footer-callout-image">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ct-footer-callout-image')) ?>">
          </div> 
        </div>
        
          <div class="col-6">    
        <div class="footer-callout-text">
        <h2 class="callout-h2"><a href="<?php echo get_permalink(get_theme_mod('ct-footer-callout-link')) ?>">
        <?php echo get_theme_mod('ct-footer-callout-headline') ?>
        </a></h2>
        <?php echo wpautop(get_theme_mod('ct-footer-callout-text')) ?>
        </div>
          </div>
        </div></?php>

    <?php } ?>
<!-- /conditional logic whether to display this custom content -->

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



