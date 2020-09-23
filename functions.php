<?php
  // Constants
  $PATH = get_template_directory_uri();
  $folder = $PATH.'/images/';
  $GLOBALS['diamondListImagePath'] = $folder . 'home-diamond-list.png';
  $GLOBALS['liveChatImage'] = $folder . 'icon-live-chat.png';

  // Register menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer_about' => __('Footer Menu About'),
    'footer_diamonds' => __('Footer Menu Diamonds'),
    'footer_help' => __('Footer Menu Help')
  ));
  
  // Common components. Style in 'common/file.scss', 'common/button-primary'
  // - Buttons
  function PrimaryButton($text) {
    return '<button type="button" class="button-primary">'.$text.'</button>';
  }
  
  function LiveChatButton() {
    echo '
      <section class="button-live-chat">
        <button type="button">
          <div>
            <img src="'.$GLOBALS['liveChatImage'].'" alt="Icon">
            <span>Live chat</span>
          </div>
        </button>
      </section>
    ';
  }
  
  // - Effects
  function BorderBottomGradient($text) {
    return '<section class="border-bottom-gradient"><div class="border-bottom-gradient__text">'.$text.'</div></section>';
  }
  
  // - Sticker
  function Sticker($text) {
    return '<section class="sticker">'.$text.'</section>';
  }
  
  // - Article block
  function ArticleBlock($imgPath, $title, $text) {    
    return '
      <section class="article-block">
        <div class="article-block__image">
          <img src="'.$imgPath.'" alt="Icon">
        </div>
        <h2 class="article-block__title">'.$title.'</h2>
        <div class="article-block__text">'.$text.'</div>
        <div class="article-block__line"></div>
      </section>
    ';    
  }
  
  // - Diamond collection
  function DiamondCollection($title, $subtitle, $buttonText) {
    echo '
      <section class="collection">
        <h2 class="collection__title">'.$title.'</h2>
        <p class="collection__sub-title">'.$subtitle.'</p>      
        <img class="collection__image" src="'.$GLOBALS['diamondListImagePath'].'" alt="Image">        
        <div class="collection__button">'.PrimaryButton($buttonText).'</div>
      </section>
    ';
  }
?>