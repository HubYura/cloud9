<?php
  /* Template Name: Homepage */
  
  get_header();

  $folder = $PATH.'/images/';
  $image = $folder . 'diamond-1.png';
  
  $path = get_template_directory();  
  $bottom = $path . '/common/bottom.php';
?>

<section class="page-404">
  <h1 class="page-404__title">404</h1>
  
  <h4 class="page-404__text">The page you`re looking for cloud not be found</h4>
  
  <img class="page-404__image" src="<?php echo $image ?>" alt="Image" >
  
  <div class="page-404__bottom bottom">
    <h5 class="bottom__title">Here`s some useful links</h5>
    <a class="bottom__url" href="#">
      Back to the <span class="bold">Home page</span>
    </a>
    <p class="bottom__contact">
      Contact us <span>1.866.996.9642</span>
    </p>
  </div>
</section>

<?php include $bottom; ?>
  
<?php get_footer(); ?>