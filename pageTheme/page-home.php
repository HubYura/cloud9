<?php
  /* Template Name: Homepage */
  
  get_header();

  $path = get_template_directory();  
  $subscribe = $path . '/common/subscribe.php';
?>

<section class="home">
  <?php the_content()?>

  <!-- Subscribe -->
  <?php include $subscribe; ?>
  
  <?php //echo get_post_field('post_content', $post->ID); ?>
</section>

<?php get_footer(); ?>