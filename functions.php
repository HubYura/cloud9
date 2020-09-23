<?php
  // Constants
  $PATH = get_template_directory_uri();
  $folder = $PATH.'/assets/images/';
  $GLOBALS['diamondListImagePath'] = $folder . 'home-diamond-list.png';
  $GLOBALS['liveChatImage'] = $folder . 'icon-live-chat.png';

  // Register menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer_about' => __('Footer Menu About'),
    'footer_diamonds' => __('Footer Menu Diamonds'),
    'footer_help' => __('Footer Menu Help')
  ));

/**
 * Enqueue scripts and styles.
 */
function itg_scripts() {
    wp_enqueue_style( 'c9d-main', get_template_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_style( 'c9d-style', get_stylesheet_uri() );

    wp_enqueue_script( 'c9d-scripts-main', get_template_directory_uri() . '/assets/js/main.js', '', '1.1', true );

}

/**
 * Implement the ACF block
 */
require_once get_template_directory() . '/gutenberg/acf-block.php';

add_action( 'wp_enqueue_scripts', 'itg_scripts' );
  
  // Common components. Style in 'common/file.scss', 'common/button-primary'
  // - Buttons
  function PrimaryButton($text) {
    return '<button type="button" class="button-primary">'.$text.'</button>';
  }
  
  function LiveChatButton($text_button = 'Live chat') {
    echo '
      <section class="button-live-chat">
        <button type="button">
          <div>
            <img src="'.$GLOBALS['liveChatImage'].'" alt="Icon">
            <span>'.$text_button.'</span>
          </div>
        </button>
      </section>
    ';
  }
  
  // - Effects
  function BorderBottomGradient($text) {
    return '<div class="border-bottom-gradient"><div class="border-bottom-gradient__text">'.$text.'</div></div>';
  }
  
  // - Sticker
  function Sticker($text) {
    return '<div class="sticker">'.$text.'</div>';  
  }
  
  // - Article block
  function ArticleBlock($imgPath, $title, $text) {    
    return '
      <div class="article-block">
        <div class="article-block__image">
          <img src="'.$imgPath.'" alt="Icon">
        </div>
        <h2 class="article-block__title">'.$title.'</h2>
        <div class="article-block__text">'.$text.'</div>
        <div class="article-block__line"></div>
      </div>    
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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}
?>