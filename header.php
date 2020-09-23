<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Diamonds</title>
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body>
  <?php 
    // Create header`s custom fields
    // TO DO:
    // if (get_post_meta(get_the_ID(), 'header_phone', true) == false) {
      // update_post_meta(get_the_ID(), 'header_phone', 'Empty');
    // }
    
    // Variables
    $path = get_template_directory_uri();
    $closeButtonPath = $PATH . '/assets/images/header-close.php';
    $facebookPath = $path . '/assets/images/facebook.png';
    $instagramPath = $path . '/assets/images/instagram.png';
    $logoPath = $PATH . '/assets/images/header-diamond.php';
    $navButtonPath = $path . '/assets/images/nav-button.png';
    $menuMobileOpenPath = $path . '/assets/images/menu-mobile-open.png';
  ?>

  <header class="header">
    <ul class="header__grey-list">
      <li class="header__grey-item">Ad block</li>
      <li class="header__grey-item">Special Offer</li>
      <li class="header__grey-item empty">Call to action</li>      
    </ul>
    <div class="header__grey-close">
      <?php include($closeButtonPath); ?>
    </div>
    
    <div class="header__block block">
      <ul class="block__network-list">
        <li class="block__network">
          <a href="#" target="_blank">
            <img src="<?php echo $facebookPath ?>" width="32" height="32" alt="Facebook" >
          </a>
        </li>
        <li class="block__network">
          <a href="#" target="_blank">
            <img src="<?php echo $instagramPath ?>" width="32" height="32" alt="Instagram" >
          </a>
        </li>
      </ul>
      
      <div class="block__logo">
        <?php include($logoPath); ?>
      </div>
      
      <div class="block__phone">
        <?php the_field('phone','option'); ?>
      </div>
      
      <ul class="block__language-list">
          <?php pll_the_languages(array('show_flags'=>0,'show_names'=>1)); ?>
      </ul>
    
      <div class="block__nav nav">
        <nav>
          <?php
            $args = array(
              'theme_location' => 'primary'
            );
            wp_nav_menu($args);
          ?>
        </nav>
      </div>
      
      <img class="block__nav-button" src="<?php echo $navButtonPath ?>" alt="Nav button" >
    </div>
    
    <img class="header__menu-mobile-open" src="<?php echo $menuMobileOpenPath ?>" alt="" >
    <div class="header__fog"></div>
  </header>
  
  <div class="header-mobile-block"></div>