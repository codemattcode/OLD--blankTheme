
<footer class="site-footer">
<div class="wrapper">
<div class="row">
<div class="col-12">
<!-- <nav class="site-nav nav-footer">
  <?php 
      $args = array(
        'theme_location' => 'footer-nav'
      );
    ?>
  <?php wp_nav_menu(  $args  ) ?> 
</nav> -->
<div class="copyright">

  <p>
    <?php bloginfo('name'); ?>
  
  - &copy; <?php echo date('Y') ?>
  </p>

  </div>
</div><!-- /row -->
</div><!-- /wrapper -->

</footer>

</div><!-- /wrapper -->

<?php wp_footer(); ?>
</body>
</html>
