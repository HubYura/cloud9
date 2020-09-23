<?php
  /* Template Name: Historypage */
  
  get_header();
  
  $folder = $PATH . '/images/page-history/';
  $path = get_template_directory();  
  $topImage_ = $folder . 'top.png';  
  $blockImageOne = $folder . 'block-1.png';
  $blockImageTwo = $folder . 'block-2.png';
  $blockRectangle = $folder . 'rectangle.png';  
  $locationIsraelFlag = $folder . 'israel-1.png';
  $locationIsrael = $folder . 'israel-2.png';
  $locationIsraelMobile = $folder . 'israel-3.png';  
  $bottom = $path . '/common/bottom.php';
?>

<section class="history">  
  <!-- Top -->
  <div class="history__top top">
    <div class="top__title">History</div>
    <img class="top__image" src="<?php echo $topImage_ ?>" alt="Image">
  </div>
  
  <!-- Title -->
  <div class="history__title title">
    <h3 class="title__content">Aus der Geschichte lernen</h3>
    <p class="title__text">Unsere Familie ist seit 1992 im klassischen Diamantenhandel tätig und hat ein Office
      im berühmtesten Diamanten-Distrikt der Welt, auf der 47 Straße in Manhattan. Das
      ist natürlich schön und auch ein bisschen sagenumwoben. Aber modern und fortschrittlich? Eher nicht.</p>
  </div>
  
  <!-- History -->
  <div class="history__block block">
    <div class="block__row-1 row-1">
      <div class="row-1__left">
        <div class="block__text">
          Unsere Familie fiel dem Marketing von DeBeers zum Opfer und verkauft seit fast 20 Jahren deren Mythos. So wurde aus 
          kristallisiertem Kohlenstoff, der seit Millionen von Jahren vergraben liegt, der größte Liebesbeweis der Welt. Aber unter welchen
          Bedingen und mit welchen Konsequenzen? Kinderarbeit, Raubbau an der Natur, politische und ökologische Konflikte waren die Folge des
          Millionengeschäfts mit dem Traum vom großen Glück.
        </div>
      </div>      
      <div class="row-1__right">
        <img class="right__image" src="<?php echo $blockImageOne ?>" alt="Image">
        <img class="right__rectangle" src="<?php echo $blockRectangle ?>" alt="Image">
      </div>
    </div>
      
    <div class="block__row-2 row-2">
      <div class="row-2__left">
        <img class="left__image" src="<?php echo $blockImageTwo ?>" alt="Image">
        <img class="left__rectangle" src="<?php echo $blockRectangle ?>" alt="Image">
      </div>
        
      <div class="row-2__right">
        <div class="block__text">
          Also verabschiedeten wir uns aus dem alten Familien-Business und schauten nach Vorne. Dahin, wo die Zukunft
          liegt, die Nachhaltigkeit zuhause ist und die moderne Technologie ihre Magie entfaltet. Dem Zeitgeist entsprechend
          haben wir uns den Möglichkeiten der Hightech-Industrie hingegeben und ein begabtes Team von Plasmaphysikern und 
          Plasmachemikern zusammengestellt.
        </div>
      </div>      
    </div>
  </div>
  
  <!-- Location -->
  <div class="history__location location">
    <div class="location__text-block text-block">
      <h3 class="text-block__title">CLOUD 9 bietet aktuell die reinsten und hochfarbigsten Diamanten.</h3>
      <p class="text-block__subtitle">Sie werden mittels CVD-Verfahren im High-Tech Zentrum der Welt: Israel hergestellt.</p>
      <p class="text-block__text">Das Geheimnis der Qualität unserer Diamanten liegt an hoch begabten und hoch qualifizierten 
        Mitarbeitern, welche mit so außerordentlicher Begabung und technischem Können nur in Israel zu finden sind, und natürlich 
        an unserem CTO. Er ist Professor der angewandten Physik und arbeitete jahrzehntelang an einem Plasmatriebwerk für Interstellare
        Raumfahrt. Von seinem Können, Wissen und seiner Erfahrung profitiert CLOUD 9 und kann sich deshalb von den Billig-Herstellern
        wie aus China, Indien oder den USA radikal abgrenzen. Für diejenigen die Breaking Bad kennen, unser CTO
        ist der Heisenberg für Lab Grown Diamanten. Made in Israel steht für höchsten technischen Vorsprung, und Talenten 
        mit dem bemerkenswertesten Know-how, den die Menschheit zu bieten hat!</p>
      <div class="text-block__button">
        <?php echo PrimaryButton('Our technology'); ?>
      </div>
      
      <img class="text-block__image-mobile" src="<?php echo $locationIsraelMobile ?>" alt="Image">
    </div>
    
    <div class="location__image-block">
      <img class="image-block__map" src="<?php echo $locationIsrael ?>" alt="Image">
      <img class="image-block__flag" src="<?php echo $locationIsraelFlag ?>" alt="Image">
    </div>
  </div>
  
  <!-- Diamonds Collection -->
  <div class="history__diamond-collection">
    <?php DiamondCollection('Diamonds Collection', 'Shop our extensive collection of lab created diamonds.', 'Catalogue request'); ?>
  </div>
  
  <!-- Bottom -->
  <?php include $bottom; ?>
</section>
    
<?php get_footer(); ?>