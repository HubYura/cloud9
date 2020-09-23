<?php
  /* Template Name: Productpage */
  
  get_header();
  
  $folder = $PATH . '/assets/images/page-product/';
  $path = get_template_directory();  
  $topImage = $folder.'top-diamond.png';  
  $blockImageOne = $folder.'block-1.png';
  $blockImageTwo = $folder.'block-2.png';  
  $rowImageOne = $folder.'heart.png';
  $rowImageTwo = $folder.'love.png';  
  $infoImage = $folder.'quote.png';  
  $uniqueImage = $folder.'unique.png';
  $uniqueIcon = $PATH.'/images/icon-diamond.png'; 
  $coluredLeftImageOne = $folder.'diamond-blue.png';
  $coluredLeftImageTwo = $folder.'diamond-yellow.png';
  $coluredRightImage = $folder.'diamond-red.png';
  $storyImage = $folder.'story.png';
  $bottom = $path . '/common/bottom.php';
?>

<section class="product">
  <!-- Top -->
  <div class="product__top top">
    <div class="top__title">CLOUD 9 bietet nur zertifizierte Typ IIA-Diamanten. Sie werden hochwertig geschliffen und sind 
      von 1 Karat bis 5 Karat in den Farben D-H und der Qualität VVS1-VS1 erhältlich.
    </div>
    
    <img class="top__image" src="<?php echo $topImage ?>" alt="Image" >
  </div>
  
  <!-- Block -->
  <div class="product__block block">
    <div class="block__row-1 row-1">
      <div class="row-1__text text">
        <h2 class="block__title">
          Kein Abbau
        </h2>        
        <ul class="text__list">
          <li class="text__item">Wir verzichten auf den Abbau von Diamanten und schützen damit aktiv Menschen und die Umwelt.</li>
          <li class="text__item">Wir unterstützen keine Konflikte.</li>
          <li class="text__item">Wir erodieren nicht den Boden.</li>
          <li class="text__item">Wir schaden keinen Tieren.</li>
          <li class="text__item">Wir verschmutzen nicht das Wasser.</li>
          <li class="text__item">Wir üben keinen negativen Einfluss auf die Bevölkerung aus.</li>
        </ul>
      </div>
      
      <img class="row-1__image" src="<?php echo $blockImageOne ?>" alt="Image">
    </div>
    
    <div class="block__row-2 row-2">
      <img class="row-2__image" src="<?php echo $blockImageTwo ?>" alt="Image">
      
      <div class="row-2__text text">
        <h2 class="block__title">Kein Kartell</h2>
        <p class="text__content">
          Wir passen den Preis unserer Diamanten am Markt an. Anders als es im Fall von natürlichen Diamanten gemacht wird.
          Denn dort bestimmt das Kartell die Preise. Unsere Prognose: Langfristig wird dieses falsche Spiel für den Wertverlust 
          von natürlichen Diamanten sorgen.
        </p>
      </div>
    </div>
  </div>
  
  <!-- Row -->
  <div class="product__row">
    <div class="row__left left">
      <div class="row__left-inner">
        <h1 class="left__title">Rar und besonders</h1>
        <p class="left__text">
          Große Diamanten gibt es selten. Kleine Diamanten gibt es en masse. Völlig egal, ob natürlich oder im Labor gezüchtet.
          Einen Diamanten zu finden oder herzustellen, der über 1 Karat hat, ist nicht nur extrem schwer, sondern benötigt ein hohes Investment.
        </p>
        <img class="left__image" src="<?php echo $rowImageOne ?>" alt="Image">
      </div>
    </div>
    
    <img class="row__right-image" src="<?php echo $rowImageTwo ?>" alt="Image">
  </div>
  
  <!-- Info -->
  <div class="product__info info"">
    <div class="info__label">
      Einfach echt
    </div>
    <div class="info__container container">
      <!-- Info-block -->
      <div class="container__block block">
        <img class="block__image" src="<?php echo $infoImage ?>" alt="Image">
        <p class="block__text">
          Natürliche Diamanten sind ein Geschenk der Natur, während  man-made Diamanten ein Geschenk menschlicher Weisheit sind
        </p>
        <p class="block__text-bold">
          Qiang Lin,
        </p>
        <p class="block__text-bottom">
          Shanghai Diamond Exchange’s President
        </p>
      </div>
      
      <!-- Info-block -->
      <div class="container__block block">
        <img class="block__image" src="<?php echo $infoImage ?>" alt="Image">
        <p class="block__text">
          Es sind echte Diamanten. Sie haben die gleichen optischen, chemischen und physikalischen Eigenschaften
        </p>
        <p class="block__text-bold">
          Matthew Hall, Director,
        </p>
        <p class="block__text-bottom">
          Gemological Institute of America (GIA)
        </p>
      </div>

      <!-- Info-block -->
      <div class="container__block block">
        <img class="block__image" src="<?php echo $infoImage ?>" alt="Image">
        <p class="block__text">
          Man-made Diamanten sind echte Diamanten.
        </p>
        <p class="block__text-bold">
          Federal Trade Commission,
        </p>
        <p class="block__text-bottom">
           August 2018.
        </p>
      </div>

      <!-- Info-block -->
      <div class="container__block block">
        <img class="block__image" src="<?php echo $infoImage ?>" alt="Image">
        <p class="block__text">
          It’s an evolution
        </p>
        <p class="block__text-bold">
          GIA chief executive officer and president Susan Jacques,
        </p>
        <p class="block__text-bottom">
          August 2020.
        </p>
      </div>
    </div>
  </div>
  
  <!-- Diamonds Collection -->
  <div class="product__diamond-collection">
    <?php DiamondCollection('Search for Diamond Shape?', 'Shop our extensive collection of lab created diamonds.', 'Catalogue request'); ?>
  </div>
  
  <!-- Unique -->
  <div class="product__unique unique" style="display: none;">
    <img class="unique__image" src="<?php echo $uniqueImage ?>" alt="Image">
    
    <div class="unique-block-wrapper">
      <div class="unique__block block">
        <img class="block__icon" src="<?php echo $uniqueIcon ?>" alt="Image">
        
        <h3 class="block__title">Jeder ist einzigartig</h3>
        <div class="block__text text">
          <p class="text__row">Im Labor hergestellte Diamanten sind individuell gewachsen und haben deshalb auch individuelle Eigenschaften.</p>
          <p class="text__row">Es gibt keine zwei identischen Diamanten. Auch nicht beim Prozess im Labor.</p>
          <p class="text__row">Deswegen hat jeder einzigartig gewachsene Diamant auch ein eigenes Zertifikat mit einer eigenen gemologischen ID.</p>
        </div>
      </div>
    </div>      
  </div>
  
  <!-- Diamonds coloured -->
  <div class="product__coloured coloured">
    <div class="coloured__left">
      <div class="left__image-wrapper">
        <img class="left__image-blue" src="<?php echo $coluredLeftImageOne ?>" alt="Image">
        <img class="left__image-yellow" src="<?php echo $coluredLeftImageTwo ?>" alt="Image">
      </div>
    </div>
    
    <div class="coloured__center center">
      <h2 class="center__title">Farben Diamonds</h2>
      <p class="center__subtitle">Wir können unsere Diamanten auch in Fancy Farben herstellen: Blau, Gelb und Pink.</p>
      
      <div class="center__text text">
        <p class="text__row">Es ist nicht einfach, einen farbigen Diamanten im Labor herzustellen. Auch, wenn sie preiswerter sind als natürliche. Qualitativ hochwertige Diamanten in außergewöhnlichen Farben zu züchten, ist eine Kunst für sich.</p>
        <p class="text__row">Dem Wachstumsprozess werden chemische Elemente aus der Natur zugeführt, die die Farbe verändern. Deshalb müssen Kunden mehrere Wochen bis Monate Wartezeit einplanen.</p>
        <p class="text__row">Farbige Lab Grown Diamanten werden nach denselben Standards wie die natürlichen bewertet: Farbe, Sättigung und Ton.</p>
      </div>
      
      <div class="coloured__bottom-mobile">
        <img class="bottom-mobile__image-red" src="<?php echo $coluredRightImage ?>" alt="Image">
        <img class="bottom-mobile__image-yellow" src="<?php echo $coluredLeftImageTwo ?>" alt="Image">
      </div>
      
      <div class="center__primary-button">
        <?php echo PrimaryButton('Color diamond collection'); ?>
      </div>
    </div>
    
    <div class="coloured__right">
      <img class="right__image-red" src="<?php echo $coluredRightImage ?>" alt="Image">
    </div>
  </div>
  
  <!-- Story -->
  <div class="product__story story">
    <div class="story__back"></div>
  
    <img class="story__image" src="<?php echo $storyImage ?>" alt="Image">
    
    <div class="story__block block">
      <div class="block__inner">
        <div class="block__title">
          <?php echo BorderBottomGradient('Meisterhaft geschliffen'); ?>
        </div>
        
        <p class="block__text">
            Der Diamantschliff ist ein unglaublich komplexer und spezieller Prozess mit vielen
            Schritten. Im Gegensatz zu den Orten der Massenproduktion, wie Indien und China,
            setzen wir beim Schleifen alles daran, das Beste aus dem Diamanten herauszuholen,
            um die unnachahmliche Brillanz zu gewährleisten. Deswegen arbeiten wir nur mit den
            qualitativ hochwertigsten Diamantenschleifern der Welt in Israel. Neben den klassischen
            patentierten Schliffen bieten wir auch besondere Formen an wie das Herz, den Pfeil,
            ovale sowie eckige, Marquise, Emerald, Princess, Pear, Radiant und Cushion.
        </p>
        
         <div class="block__primary-button">
          <?php echo PrimaryButton('Our story'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom -->
  <?php include $bottom; ?>
</section>
    
<?php get_footer(); ?>