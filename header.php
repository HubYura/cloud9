<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Diamonds</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
  <link rel="stylesheet" href="dist/main.css" />
  <link rel="stylesheet" href="../../wordpress-4.6.1/dist/main.css" />
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
    $closeButtonPath = $PATH . 'images/header-close.php';
    $logoPath = $PATH . 'images/header-diamond.php';
    $navButtonPath = $path . '/images/nav-button.png';
    $menuMobileOpenPath = $path . '/images/menu-mobile-open.png';
    
    $facebookPath = $path . '/images/facebook.svg';
    $instagramPath = $path . '/images/instagram.svg';
  ?>
  
  <div class="header-grey grey">
    <div class="grey__inner">
      <ul class="grey__list">
        <li class="grey__item">
          <a href="#">Ad block</a>
        </li>
        <li class="grey__item">
          <a href="#">Special Offer</a>        
        </li>
        <li class="grey__item empty">
          <a href="#">Call to action</a>
        </li>      
      </ul>
      <div class="grey__close">
        <?php include($closeButtonPath); ?>
      </div>
    </div>
  </div>
  
  <header class="header">
    <div class="header__block block">
      <ul class="block__network-list">
        <li class="block__network">
          <a href="#" target="_blank">Facebook</a>
        </li>
        <li class="block__network">
          <a href="#" target="_blank">Instagram</a>
        </li>
        
        <li class="block__network-small">
          <a href="#" target="_blank">
            <img src="<?php echo $facebookPath ?>" width="32" height="32" alt="Facebook">
          </a>
        </li>
        <li class="block__network-small">
          <a href="#" target="_blank">
            <img src="<?php echo $instagramPath ?>" width="32" height="32" alt="Instagram">
          </a>
        </li>
      </ul>
      
      <div class="block__logo">
        <?php include($logoPath); ?>
      </div>
      
      <div class="block__phone">
        <?php //echo get_post_meta(get_the_ID(), 'header_phone', true); ?>
        1-123-454-1234
      </div>
      
      <ul class="block__language-list">
        <li class="block__language">
          <a href="#">Deu</a>
        </li>
        <li class="block__language empty">
          <a href="#">Eng</a>
        </li>
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