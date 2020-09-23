<?php
  /* Template Name: Contactpage */
  
  get_header();

  $folder = $PATH . '/images/page-contact/';
  $path = get_template_directory();  
  $topImage = $folder.'top.png';
  $topImageMobile = $folder.'top-mobile.png';
  $contactForm = $path.'/common/contact-form.php';  
  $subscribe = $path . '/common/subscribe.php';
  $bottom = $path . '/common/bottom.php';
?>

<section class="contact">
  <!-- Top -->
  <div class="contact__top top">  
    <img class="top__image" src="<?php echo $topImage ?>" alt="Image">
    <img class="top__image-mobile" src="<?php echo $topImageMobile ?>" alt="Image">
    
    <h1 class="top__title">Contact Us</h1>
  </div>
  
  <!-- Main -->
  <div class="contact__main main">
    <div class="main__left left">
      <p class="left__text">
        It is our pleasure having you as a valued customer and we want to hear from you if you have any concerns,
        complaints, or questions. We also like getting positive feedback. Please contact us by the below methods.
      </p>
      
      <div class="left__chat chat">
        <p class="chat__title">Chat with Us</p>
        <div class="chat__live-chat-button">
          <?php LiveChatButton(); ?>
        </div>
        <p class="chat__text">We're here to help with any questions you may have</p>
      </div>
      
      <div class="left__contacts contacts">
        <p class="contacts__title">Contacts</p>
        <p class="contacts__caption">E-mail:<span class="contacts__mail">marketing@cloud.com</span></p>
        <p class="contacts__caption">WhatsApp:<span class="contacts__whats">+49 162 9701936</span></p>
      </div>
    </div>
    
    <div class="main__right">
      <?php include $contactForm; ?>
    </div>
  </div>
  
  <!-- Subscribe -->
  <?php include $subscribe; ?>
</section>
    
<?php get_footer(); ?>