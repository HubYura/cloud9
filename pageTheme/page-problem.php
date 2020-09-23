<?php
  /* Template Name: Problempage */
  
  get_header();

  $folder = $PATH . '/assets/images/page-problem/';
  $path = get_template_directory();  
  $diamondImagePath = $folder . 'diamond.png';
  $diamondImageSmallPath = $folder . 'diamond-mobile.png';  
  $blockImageOnePath = $folder . 'block-2.png';
  $blockImageTwoPath = $folder . 'block-1.png';
  $blockCirclePath = $folder . 'circle.png';
  $blockRectanglePath = $folder . 'rectangle.png';  
  $tableImage = $folder . 'diamond-1.png';
  $tableArrow = $folder . 'arrow-right.png';  
  $bottom = $path . '/common/bottom.php';
?>
  
<section class="problem">  
  <!-- Top -->
  <div class="problem__top top">
    <img class="top__image" src="<?php echo $diamondImagePath ?>" alt="Image">
    <img class="top__image-small" src="<?php echo $diamondImageSmallPath ?>" alt="Image">
    
    <div class="top__sticker-2">
      <div class="sticker-2__future">Future</div>        
      
      <div class="sticker-2__content">
        <h3 class="sticker-2__title">Diamanten von Morgen</h3>          
        <p class="sticker-2__text">Ökostrom, Elektro-Autos, Bio-Fleisch – Überall auf der Welt kaufen Menschen seit Jahren bewusster und nachhaltiger ein.</p>
        <p class="sticker-2__text-italic">Das wird auch zukünftig für Diamanten gelten.</p>
      </div>
    </div>
  </div>
  <div class="problem__space-small"></div>
  
  <!-- Block -->
  <div class="problem__block block">
    <div class="block__row-1 row-1">
      <div class="row-1__left left">
        <h2 class="left__title">Why non-conflict diamonds?</h2>
        <p class="left__text">Natürliche Steine, die unter schlimmsten Bedingungen für Mensch und Natur abgebaut werden, sind von Gestern und nicht mehr anschlussfähig. Deswegen haben wir uns vor Jahren entschieden, auf konfliktfreie Diamanten aus dem Labor zu setzen. Die Herstellung belastet nicht die Umwelt, finanziert keine Kriege, beutet niemanden aus.</p>
        <div class="left__button"><?php echo PrimaryButton('Non-conflict technology'); ?></div>
      </div>
      
      <div class="row-1__right">          
        <img class="right__circle" src="<?php echo $blockCirclePath ?>" alt="Image">
        <img class="right__image" src="<?php echo $blockImageOnePath ?>" alt="Image">
        <img class="right__rectangle" src="<?php echo $blockRectanglePath ?>" alt="Image">          
      </div>
    </div>
    
    <div class="block__row-2 row-2">
      <div class="row-2__column-1 column-1">
        <h2 class="column-1__title">Land-, Wasser- und  Luftverschmutzung</h2>
        <p class="column-1__text">Beim Diamantenabbau entstehen tiefe Krater, die zu Bodenerosionen führen und die Luft durch den aufgewirbelten Staub verschmutzen. Daneben sind langfristige landwirtschaftliche Schäden die Folge.</p>
      </div>
      <div class="row-2__column-2">
        <img class="column-2__image" src="<?php echo $blockImageTwoPath ?>" alt="Image">
        <img class="column-2__circle" src="<?php echo $blockCirclePath ?>" alt="Image">
      </div>
      <div class="row-2__column-3">
        <p class="column-3__text">Notwendige Nährstoffe werden der Erde entzogen. Über Jahrzehnte können die Abbaugebiete nicht mehr genutzt werden, weil der ausgedörrte Oberboden keinen Anbau zulässt</p>
      </div>
    </div>
  </div>
  
  <!-- Growing -->
  <div class="problem__growing growing">
    <div class="growing__inner">
      <h2 class="inner__title">Why lab growing diamonds?</h2>
      
      <div class="inner__content content">
        <div class="content__table table">
          <ul class="table__column-1 column-1">
            <li class="column-1 empty">Empty</li>
            <li class="column-1">Emission</li>
            <li class="column-1">Wasserverbrauch</li>
            <li class="column-1">Genutztes Land</li>
            <li class="column-1">Energie</li>
            <li class="column-1">Vernichtete Erde</li>
          </ul>
          
          <ul class="table__column-2 column-2">
            <li class="column-2 table-header">Lab-grown Diamanten</li>
            <li class="column-2">0,0028 Gramm pro Karat</li>
            <li class="column-2">1,619 Liter</li>
            <li class="column-2">0,0001 Hektar</li>
            <li class="column-2">0,036 Gigajoules</li>
            <li class="column-2 border-none">0 KG pro Karat</li>
            <li class="column-2">
              <?php echo PrimaryButton('Shop now'); ?>
            </li>
          </ul>
          
          <ul class="table__column-3 column-3">
            <li class="column-3 table-header">Natürliche Diamanten</li>
            <li class="column-3">57.000 Gramm pro Karat</li>
            <li class="column-3">93,389 Liter</li>
            <li class="column-3">0,1771 Hektar</li>
            <li class="column-3">104,79 Gigajoules</li>
            <li class="column-3">250,000 KG pro Karat</li>
          </ul>
        </div>
        
        <img class="content__image" src="<?php echo $tableImage ?>" alt="Image">
      </div>
    </div>
  </div>    
  <img class="problem__growing-arrow" src="<?php echo $tableArrow ?>" alt="Image">
  
  <!-- Bottom -->
  <?php include $bottom; ?>
</section>
    
<?php get_footer(); ?>