  <?php 
    $menuAbout = array('theme_location' => 'footer_about');    
    $menuDiamonds = array('theme_location' => 'footer_diamonds');
    $menuHelp = array('theme_location' => 'footer_help');
    
    $path = get_template_directory_uri();
    $facebookPath = $path . '/assets/images/facebook-white.png';
    $instagramPath = $path . '/assets/images/instagram-white.png';
    $logoPath = $path . '/assets/images/logo-white.png';
  ?>
  
  <!-- Footer big design -->
  <footer class="footer-big">
    <section class="footer-big__tools tools">
      <div class="tools__about">
        <p class="tools__title">About</p>
        <?php 
          wp_nav_menu($menuAbout);
        ?>
      </div>
      
      <div class="tools__diamonds">
        <p class="tools__title">Diamonds</p>
        <?php 
          wp_nav_menu($menuDiamonds);
        ?>
      </div>
      
      <div class="tools__help">
        <p class="tools__title">Help</p>
        <?php 
          wp_nav_menu($menuHelp);
        ?>
      </div>
    </section>
    
    <section class="footer-big__right right">
      <div class="right__logo">
        <img src="<?php echo $logoPath ?>" alt="Image">
      </div>
      
      <ul class="right__network-list">
        <li class="right__network">
          <a href="#" target="_blank">
            <img src="<?php echo $facebookPath ?>" width="32" height="32" alt="Facebook" >
          </a>
        </li>
        <li class="right__network">
          <a href="#" target="_blank">
            <img src="<?php echo $instagramPath ?>" width="32" height="32" alt="Instagram" >
          </a>
        </li>
      </ul>
    </section>
    
    <section class="footer-big__bottom bottom">
      <ul class="bottom__list">
        <li class="bottom__item">
          <a href="#" target="_blank">Copyright © 2020 CLOUD, LLC</a>
        </li>        
        <li class="bottom__item">
          <a href="#" target="_blank">Terms & Conditions</a>
        </li>
         <li class="bottom__item">
          <a href="#" target="_blank">Privacy Policy</a>
        </li>
         <li class="bottom__item empty">
          <a href="#" target="_blank">Cookie Policy</a>
        </li>
      </ul>
    </section>
  </footer>
  
  <!-- Footer small design -->
  <footer class="footer-small small">
    <section class="small__row-1 row-1">
      <div class="row-1__about">
        <p class="small__title">About</p>
        <?php 
          wp_nav_menu($menuAbout);
          wp_nav_menu($menuDiamonds);
        ?>
      </div>
      </div>
      <div class="row1__help">
        <p class="small__title">Help</p>
        <?php 
          wp_nav_menu($menuHelp);
        ?>
      </div>
    </section>
    
    <section class="small__row-2">      
      <ul class="row-2__list">
        <li class="row-2__item">
          <a href="#" target="_blank">Copyright © 2020 CLOUD, LLC</a>
        </li>        
        <li class="row-2__item">
          <a href="#" target="_blank">Terms & Conditions</a>
        </li>
         <li class="row-2__item">
          <a href="#" target="_blank">Privacy Policy</a>
        </li>
         <li class="row-2__item empty">
          <a href="#" target="_blank">Cookie Policy</a>
        </li>
      </ul>
      <ul class="row-2__network-list">
        <li class="row-2__network">
          <a href="#" target="_blank">
            <img src="<?php echo $facebookPath ?>" width="32" height="32" alt="Facebook" >
          </a>
        </li>
        <li class="row-2__network">
          <a href="#" target="_blank">
            <img src="<?php echo $instagramPath ?>" width="32" height="32" alt="Instagram" >
          </a>
        </li>
      </ul>
    </section>
    
    <section class="small__row-3 row-3">
      <div class="row-3__logo">
        <img src="<?php echo $logoPath ?>" alt="Image">
      </div>
      <p class="row-3__copyright">Copyright © 2020 CLOUD, LLC</p> 
    </section>
  </footer>

  <?php wp_footer(); ?>
  
</body>
</html>