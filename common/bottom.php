<?php $subscribeArrowPath = $PATH . '/assets/images/ic_arrow_right.png';  ?>

<div class="problem__bottom bottom">
  <div class="bottom__list list">
    <h4 class="bottom__title">Join the List</h4>
    <p class="bottom__text">Sign up to receive exclusive member updates, specials, product updates, and much more!</p>
    
    <div class="list__input-block">
      <input class="list__input" type="text" placeholder="E-mail Address">
      <div class="list__button">
        <img class="list__image" src="<?php echo $subscribeArrowPath ?>" alt="Image">
      </div>
    </div>
    
  </div>    
    
  <div class="bottom__help help">
    <h4 class="bottom__title">Need Help?</h4>
    <p class="bottom__text"><span class="bottom__bold">Live chat or call at</span> 1.866.996.9642 Monday through Friday, 9 a.m.–3 p.m. PST</p>
    <div class="help__button">
      <?php echo PrimaryButton('Live chat'); ?>
    </div>
  </div>
  
  <div class="bottom__mail">
    <p class="bottom__text"><span class="bottom__bold">E-mail us at</span> help@cloud.com – Anytime</p>
    <div class="mail__button">
      <?php echo PrimaryButton('e-mail us'); ?>
    </div>
  </div>
</div>