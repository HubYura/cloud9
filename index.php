<?php 
  get_header();
  
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <section class="post">
        <?php the_content(); ?>
      </section>
    <?php endwhile;
  else : 
    echo '<p>No content found</p>';
  endif;
  
  get_footer();
?>