<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<div class="wrapper">
<div class="row">
  <div class="col-6">
<h1 class="brand"><a href="<?php echo home_url(); ?>">
  <?php bloginfo('name'); ?></a></h1>
  </div>

  <div class="col-6">
<div class="social-nav">
      <?php 
    
          $args = array(
            'theme_location' => 'social-nav'
          );
        ?>
        <?php wp_nav_menu(  $args  ) ?>
    </div>
</div>
</div><!-- /row -->
</div><!-- /wrapper -->



