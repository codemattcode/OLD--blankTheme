<!-- CONDITIONAL LOGIC FOR POSTS WITH FEATURED IMAGE -->
<h2><a class="post-title <?php if ( has_post_thumbnail() ) { ?>title-red <?php } ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
a.post-title {
  color: green;
}

/* conditional logic add this class to the title link tag */
a.title-red {
  color: red;
}
<!-- /CONDITIONAL LOGIC FOR POSTS WITH FEATURED IMAGE -->


<!-- CUSTOM WIDGETS -->
<?php if (is_active_sidebar('widget1')) : ?>
    <div class="widget">
      <?php dynamic_sidebar('widget1'); ?>
    </div>
<?php endif; ?>
<!-- /CUSTOM WIDGETS -->




<!-- PAGE.PHP -->
THE CREATION OF PAGE.PHP ACTS AS A GENERIC PAGE FOR ALL NEWLY CREATED PAGES. THIS CAN BE OVERRIDDEN BY CREATING A UNIQUE FILE CALLED PAGE-AWESOME.PHP





<!-- ADD UNIQUE CONTENT TO THE HEADER.PHP FILE -->
<h3>
<?php if (is_page('about')) { ?>

  this is the implementation of the 'is_page function' on the 'about' page

<?php } ?>
</h3>
<!-- /ADD UNIQUE CONTENT TO THE HEADER.PHP FILE -->








<!-- CUSTOM CONTENT -->
<!-- conditional logic whether to display this custom content -->

    <?php if (get_theme_mod('ct-footer-callout-display') == "Yes") { ?>
    
        <div class="footer-callout clearfix">
          <div class="footer-callout-image">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('ct-footer-callout-image')) ?>">
          </div>
        
        <div class="footer-callout-text">
          <h2><a href="<?php echo get_permalink(get_theme_mod('ct-footer-callout-link')) ?>">
          <?php echo get_theme_mod('ct-footer-callout-headline') ?>
          </a></h2>
          <?php echo wpautop(get_theme_mod('ct-footer-callout-text')) ?>
        </div>
        </div></?php>

    <?php } ?>

<!-- /CUSTOM CONTENT -->
