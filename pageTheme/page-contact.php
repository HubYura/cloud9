<?php
  /* Template Name: Contactpage */
  
  get_header();

  $folder = $PATH . '/assets/images/page-contact/';
  $path = get_template_directory();  
  $topImage = $folder.'top.png';
  $topImageMobile = $folder.'top-mobile.png';
  $contactForm = $path.'/common/contact-form.php';  
  $subscribe = $path . '/common/subscribe.php';
  $bottom = $path . '/common/bottom.php';

  $acf_fields = get_fields();

?>

<section class="contact">
  <?php the_content() ?>
  
  <!-- Subscribe -->
  <?php include $subscribe; ?>
</section>
    
<?php get_footer(); ?>