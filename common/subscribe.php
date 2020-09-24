<?php
  $folder = $PATH.'/images/';
  $subscribeImagePath = $folder . 'icon5.svg';
  $subscribeArrowPath = $folder . 'ic_arrow_right.svg';
?>

<section class="subscribe">
  <div class="subscribe__image-wrapper image-diamond">
    <img src="<?php echo $subscribeImagePath ?>" alt="Image">
  </div>
  
  <div class="subscribe__content content">
    <div class="content__image-wrapper image-diamond">
      <img src="<?php echo $subscribeImagePath ?>" alt="Image">
    </div>
  
    <p class="content__title">Subscribe to hear about our exclusive offers and newest arrivals</p>
    <div class="content__input-block">
      <input class="content__input" type="text" placeholder="E-mail Address">
      <div class="content__button">
        <img class="content__image" src="<?php echo $subscribeArrowPath ?>" alt="Image">
      </div>
    </div>
  </div>
  
  <div class="subscribe__line">
    <div class="subscribe__line-border-clear"></div>
    <div class="subscribe__line-clear"></div>
  </div>
</section>