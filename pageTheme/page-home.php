<?php
  /* Template Name: Homepage */
  
  get_header();

  $folder = $PATH.'/images/';  
  $topImagePathWide = $folder.'home-top-wide.png';
  $topImagePathNarrow = $folder.'home-top-narrow.png';  
  $blockRightImagePath = $folder.'home-block_image1.png';
  $blockLeftImagePath = $folder.'home-block_image2.png';
  $blockBottomImagePath = $folder.'home-block_image3.png';  
  $presentationImagePath = $folder.'home-presentation.png';
  $diamondListImagePath = $folder.'home-diamond-list.png';
  $madeImageOnePath = $folder.'home-made1.png';
  $madeImageTwoPath = $folder.'home-made2.png';
  $madeBenefitsImageOnePath = $folder.'home-benefits_image1.png';
  $madeBenefitsImageTwoPath = $folder.'home-benefits_image2.png';  
  $benefitsIconOnePath = $folder.'icon1.svg';    
  $benefitsIconTwoPath = $folder.'icon2.svg';
  $benefitsIconThreePath = $folder.'icon3.svg';
  $benefitsIconFourPath = $folder.'icon4.svg';  
  $benefitsText1 = 'Lab Grown Diamanten werden in einem Labor hergestellt, ohne die Umwelt zu belasten. Der Produktionsprozess wird strengstens überwacht, um mit einem geringen Energieaufwand und minimaler Emission die. Herstellung zu gewährleisten.';
  $benefitsText2 = 'Man muss kein Diamantenexperte sein, um die Nachteile zu kennen. Jeder weiß, dass das Geschäft mit Diamanten ethisch schwierig ist. Nicht nur die Preispolitik spielt dabei eine Rolle, auch die Minenförderung und die Arbeitsbedingungen. All das fällt bei Lab Grown Diamanten weg.';
  $benefitsText3 = 'Bei gezüchteten Diamanten handelt es sich um echte Diamanten, die sich von einem aus der Erde geförderten Diamanten nicht unterscheiden lassen. Sie bestehen aus derselben chemischen Zusammensetzung, nämlich kristallisiertem Kohlenstoff, und stehen in ihrer Wertigkeit in nichts nach.';
  $benefitsText4 = 'Im Labor hergestellte Diamanten sind individuell. Sie wachsen unter identischen Bedingungen und unterscheiden sich deshalb auch in Form und Größe. Daher werden sie genau wie andere Diamanten auf Basis der vier C’s, Farbe, Schliff, Reinheit und Gewicht, bewertet und zertifiziert.';  
  $path = get_template_directory();  
  $subscribe = $path . '/common/subscribe.php';
?>

<section class="home">
  <!-- Top -->
  <div class="home__top top">
    <img class="top__image-wide" src="<?php echo $topImagePathWide ?>" alt="Home top image" >
    <img class="top__image-narrow" src="<?php echo $topImagePathNarrow ?>" alt="Home top image" >
    <div class="top__title">
      <h1 class="big-text">Glänzende Zukunft</h1>
      <h2 class="small-text">Lab Grown Diamanten von höchster Qualität</h2>
    </div>
  </div>
  
  <!-- Blocks -->
  <div class="home__block-list block">  
    <div class="block">
      <div class="block__caption">
        <div class="block__title"><?php echo BorderBottomGradient('Nachhaltigkeit'); ?></div>
        <p class="block__sub-title">Schluss mit gestern</p>
        <p class="block__text">Diamantenminen braucht niemand mehr. Auch nicht den Raubbau an der Natur Nicht die Umweltbelastung. Nicht die unmenschlichen Arbeitsbedingungen.</p>
        <p class="block__italic">Deswegen setzen wir auf im Labor gezüchtete Diamanten</p>
        <div class="block__button">
          <?php echo PrimaryButton('Our diamond lab'); ?>
        </div>
      </div>        
      <div class="block__images">
        <img class="block__right-image" src="<?php echo $blockRightImagePath ?>" alt="Image" >
        <img class="block__left-image" src="<?php echo $blockLeftImagePath ?>" alt="Image" >        
      </div>
    </div>
    
    <div id="block-bottom">
      <div class="block-bottom__image-wrapper">
        <img class="block-bottom__image" src="<?php echo $blockBottomImagePath ?>" alt="Image">
      </div>
      <div class="block__caption">
        <div class="block__title"><?php echo BorderBottomGradient('Product'); ?></div>
        <p class="block__sub-title">Genau wie die Natürlichen</p>
        <p class="block__text">Es ist unmöglich einen Diamanten aus dem Labor von einem aus der Erde zu unterscheiden. Nur die Bedingungen, unter denen der Diamant auf den Markt gekommen ist, sind andere.</p>
        <p class="block__italic">Rechtfertigt das noch den Preis- und Wertunterschied? Wir glauben nicht. Wir glauben nicht!</p>
        <div class="block__button">
          <?php echo PrimaryButton('About our product'); ?>
        </div>
      </div>        
    </div>
  </div>
  
  <!-- Presentation -->
  <div class="home__presentation presentation">
    <img class="presentation__image" src="<?php echo $presentationImagePath ?>" alt="Image" >      
    <div class="presentation__caption">
      <div class="presentation__inner">
        <h2 class="presentation__title">Geschichte</h2>
        <p class="presentation__sub-title">Wer Geschichte verändern will, muss sie verstanden haben.</p>
        <p class="presentation__text">Unsere Familie ist seit 1992 im klassischen Diamantenhandel tätig und hat ein
          Office im berühmtesten Diamanten-District der Welt, auf der 47 Straße in Manhattan. Das ist natürlich
          schön und auch ein bisschen sagenumwoben. Aber modern und fortschrittlich? Eher nicht. </p>
        <div class="block__button">
          <?php echo PrimaryButton('Our story'); ?>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Searching diamond shape -->
  <div class="home__shape">
    <?php DiamondCollection('Search for Diamond Shape?', 'Shop our extensive collection of lab created diamonds.', 'Catalogue request'); ?>
  </div>
  
  <!-- How we made diamonds -->
  <div class="home__made made">
    <div class="made__sticker"><?php echo Sticker('how do we make diamonds'); ?></div>
    
    <div class="made__left left">
      <h2 class="left__title">Technologie</h2>
      <div class="left__button">
        <?php echo PrimaryButton('Our technology'); ?>
      </div>
      <img class="left__image" src="<?php echo $madeImageOnePath ?>" alt="Image">
    </div>
      
    <div class="made__right right">
      <h2 class="right__subtitle">Die Zeit komprimieren</h2>
      <p class="right__text-row-1">Wofür die Natur viele Milliarden Jahre gebraucht hat, schafft die Technologie in wenigen Wochen.
        Der Wachstumsprozess eines Diamanten im Labor ist dem in der Natur absolut identisch.</p>
      <p class="right__text-row-2">Deswegen sind gezüchtete Diamanten auch nicht in ihrer Brillanz, Leuchtkraft und Ausdrucksstärke von denen
        aus der Erde zu unterscheiden</p>
        
      <div class="right__button">
        <?php echo PrimaryButton('Our technology'); ?>
      </div>
    </div>
    
    <img class="made__outer-image" src="<?php echo $madeImageTwoPath; ?>" alt="Image">
  </div>

  <!-- Benefits of lab growing -->
  <div class="home__benefits benefits">
    <div class="benefits__left left">
      <div class="left__circle"></div>
      <img class="left__image-1" src="<?php echo $madeBenefitsImageOnePath ?>" alt="Image">
      <img class="left__image-2" src="<?php echo $madeBenefitsImageTwoPath ?>" alt="Image">
    </div>
    
    <div class="benefits__right right">
      <div class="right__top-line">
        <div class="right__sticker"><?php echo Sticker('Benefits of lab growning'); ?></div>
      </div>
      
      <div class="right__article-block">
        <?php echo ArticleBlock($benefitsIconOnePath, 'Nachhaltig', $benefitsText1); ?>
      </div>
      
      <div class="right__article-block">
        <?php echo ArticleBlock($benefitsIconTwoPath, 'Menschlich', $benefitsText2); ?>
      </div>
      
      <div class="right__article-block">
        <?php echo ArticleBlock($benefitsIconThreePath, 'Wertig', $benefitsText3); ?>
      </div>
      
      <div class="right__article-block">
        <?php echo ArticleBlock($benefitsIconFourPath, 'Zertifiziert', $benefitsText4); ?>
      </div>        
    </div>
  </div>
  
  <!-- Subscribe -->
  <div class="home__subscribe">
    <?php include $subscribe; ?>
  </div>
  
  <?php //echo get_post_field('post_content', $post->ID); ?>
</section>

<?php get_footer(); ?>