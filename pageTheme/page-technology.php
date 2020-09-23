<?php
  /* Template Name: Technologypage */
  
  get_header();

  $folder = $PATH . '/images/page-technology/';
  $path = get_template_directory();  
  $topImage = $folder.'image-2.png';  
  $methodImage1 = $folder.'1.png';
  $methodImage2 = $folder.'2.png';
  $methodImage3 = $folder.'3.png';
  $methodImage4 = $folder.'4.png';
  $methodImage5 = $folder.'5.png';
  $methodImage6 = $folder.'6.png';
  $processImage = $folder.'image-3.png';  
  $questionsImageClose = $PATH.'/images/icon-diamond-1.png';
  $questionsImageOpen = $PATH.'/images/icon-diamond.png';  
  $bottom = $path . '/common/bottom.php';
?>

<section class="technology">
  <!-- Top -->
  <div class="technology__top top">
    <div class="top__sticker top__sticker-mobile">
      <?php echo Sticker('Technologie'); ?>
    </div>
  
    <img class="top__image" src="<?php echo $topImage ?>" alt="Image">
    
    <div class="top__block block">
      <div class="top__sticker block__sticker">
        <?php echo Sticker('Technologie'); ?>
      </div>
    
      <div class="block__text-container text-container">
        <h3 class="text-container__title">How did we make our Diamonds?</h3>
        <p class="text-container__text">Wir stellen unsere einzigartigen Diamanten mit dem CVD-Verfahren her.</p>
      </div>
    </div>
  </div>
  
  <!-- Method -->
  <div class="technology__method method">
    <h2 class="method__title">The CVD Method</h2>    
    <!-- Block list -->
    <div class="method__block-list">
      <div class="method-block block">
        <div class="block__image-wrapper">
          <img class="block__image" src="<?php echo $methodImage1 ?>" alt="Image">
        </div>
        <div class="block__content content">
          <div class="content__column-1">
            A disc containing 15-30 diamond seeds is placed in the diamond growth chamber.
          </div>
          <div class="content__column-2">
            Start with methane gas (CH4), and form a plasma with hydrogen (H).
          </div>
          <div class="content__column-3">
            <div class="column-3__title">Step</div>
            <div class="column-3__line"></div>
            <div class="column-3__number">01 / 06</div>
          </div>
        </div>
      </div>
      
      <div class="method-block block">
        <div class="block__image-wrapper">
          <img class="block__image" src="<?php echo $methodImage2 ?>" alt="Image">
        </div>
        <div class="block__content content">
          <div class="content__column-1">
            A plasma ball of uperheated gases is created  in the chamber.
          </div>
          <div class="content__column-2">
            Add a disc made up of 15-30 diamond seeds (small pieces of natural diamond) and place into the microwave reactor
          </div>
          <div class="content__column-3">
            <div class="column-3__title">Step</div>
            <div class="column-3__line"></div>
            <div class="column-3__number">02 / 06</div>
          </div>
        </div>
      </div>
      
      <div class="method-block block">
        <div class="block__image-wrapper">
          <img class="block__image" src="<?php echo $methodImage3 ?>" alt="Image">
        </div>
        <div class="block__content content">
          <div class="content__column-1">
            Heat is increased to 900-1200 C
          </div>
          <div class="content__column-2">
            For an exceptional gemstone, adjust the temperature in the chamber to between 900 and 1200°C.
          </div>
          <div class="content__column-3">
            <div class="column-3__title">Step</div>
            <div class="column-3__line"></div>
            <div class="column-3__number">03 / 06</div>
          </div>
        </div>
      </div>
      
      <div class="method-block block">
        <div class="block__image-wrapper">
          <img class="block__image" src="<?php echo $methodImage4 ?>" alt="Image">
        </div>
        <div class="block__content content">
          <div class="content__column-1">
            Methane and hydrogen gases stick to the seed. The diamond grows carbon atom by atom for 3-4 weeks.
          </div>
          <div class="content__column-2">
            The activated carbon-hydrogen species attaches itself to the seed atom. This process repeats itself endlessly
            for 21-28 days to replicate the crystal structure of the diamond seed crystal in three dimensions.
          </div>
          <div class="content__column-3">
            <div class="column-3__title">Step</div>
            <div class="column-3__line"></div>
            <div class="column-3__number">04 / 06</div>
          </div>
        </div>
      </div>
      
      <div class="method-block block">
        <div class="block__image-wrapper">
          <img class="block__image" src="<?php echo $methodImage5?>" alt="Image">
        </div>
        <div class="block__content content">
          <div class="content__column-1">
            Techs monitor growth Of seed & remove at the precise moment to maximize the gems characteristics.
          </div>
          <div class="content__column-2">
            iPad alerts notify technicians that the grown diamonds are ready for removal. The 15-30 rectangular 
            shaped gems are removed from the reactor and sent to a gemologist for cutting.
          </div>
          <div class="content__column-3">
            <div class="column-3__title">Step</div>
            <div class="column-3__line"></div>
            <div class="column-3__number">05 / 06</div>
          </div>
        </div>
      </div>
      
      <div class="method-block block">
        <div class="block__image-wrapper">
          <img class="block__image" src="<?php echo $methodImage6 ?>" alt="Image">
        </div>
        <div class="block__content content">
          <div class="content__column-1">
            A disc containing 15-30 diamond seeds is placed in the diamond growth chamber.
          </div>
          <div class="content__column-2">
            Start with methane gas (CH4), and form a plasma with hydrogen (H).
          </div>
          <div class="content__column-3">
            <div class="column-3__title">Step</div>
            <div class="column-3__line"></div>
            <div class="column-3__number">06 / 06</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Block list_(end) -->    
    <div class="method__process">
      <div class="process__left left">
        <h2 class="left__title-details">Process in details</h2>        
        <div class="left__text-details">
          Ein feines Diamantenplättchen wird in den Plasmareaktor gelegt. Im Reaktor wird ein Vakuum
          erzeugt und Mikrowellen Strahlung wird eingeleitet. Der Mikrowellen Strahlung fügt man
          das Arbeitsgas Wasserstoff hinzu, dabei bildet sich ein Hochstrombogen, der dann das
          Plasma entzündet. Durch Ionisierung entsteht ein niedrig Temperatur Plasma-Strahl der
          eine Temperatur von ca. 800 -  1200 C und eine Geschwindigkeit von ca. 300 m/s besitzt.
          Am Düsenaustritt des Reaktors wird das Reaktivgas Methan zugeführt und in
          Kohlenstoffradikale bzw. in atomaren Kohlenstoff und Wasserstoff aufgespalten.
          Die durch die Ionisierung freiwerdenden Kohlenstoff Atome setzen sich auf  dem Diamantenplättchen ab, und
          integrieren sich in dessen atomares Gitter, die freiwerdenden Wasserstoff Atome pflücken sich im Gitter integrierte
          Wasserstoff Atome
          heraus, und lassen dadurch neue Kohlenstoff Atome ihren Platz einnehmen. Dieses
          Verfahren erlaubt ein reines Monoatomares, Kristallines Kohlenstoffatom Gitter, frei von
          jeglichen unerwünschten Elementen, das ergibt eine Reinheit was einen Diamanten vom
          Typ-IIA ausmacht.           
        </div>
        
        <h2 class="left__title-resume">Resume</h2>
        <div class="left__text-resume">
          Somit vergrößert sich Schicht für Schicht das ursprüngliche Diamantenplättchen. Atom für Atom wächst der Diamant, 
          der gleichzeitig ununterbrochen hohem Druck ausgesetzt ist. Dadurch wird er nicht nur ganz besonders
          hart, sondern erhält eine bessere Farbe und Strahlkraft.
        </div>
      </div>
      
      <div class="process__right">
        <img class="right__image" src="<?php echo $processImage ?>" alt="Image">
        
        <p class="right__text">
          Jeder hergestellte CVD-Diamant ist einzigartig, genau wie geförderte Diamanten, nur
          ohne die schlechten Bedingungen für Mensch und Natur. Wir haben uns auf eine
          individuelle und nachfragenbasierte Entwicklung fokussiert und können dadurch die
          beste Qualität gewährleisten. Anders als hunderte Millionen Karat aus Minen zu fördern,
          glauben wir an den Zeitgeist, Nachhaltigkeit und die Magie der Technologie.
        </p>
      </div>
    </div>
  </div>
  
  <!-- Diamonds Collection -->
  <div class="method__diamond-collection">
    <?php DiamondCollection('Search for perfect Diamond?', 'Shop our extensive collection of lab created diamonds.', 'Catalogue request'); ?>
  </div>
  
  <!-- Questions -->
  <div class="technology__questions questions">
    <div class="questions__wrapper">
      <div class="questions__title-wrapper">
        <p class="questions__title">Lab diamonds common questions</p>
      </div>      
      <ul class="questions__list">
        <li class="questions__item item">
          Sind Lab Grown Diamanten ein neues Phänomen?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
          <p class="item__answer">
            Eigentlich nicht. Seit den 50er Jahren werden Diamanten bereits im Labor hergestellt. Die ersten Diamanten, die so entstanden,
            wurden vornehmlich für die Industrie verwendet, weil sie nicht die Qualität von Edelsteinen besaßen. Immer wieder wurden die 
            Methoden der Herstellung perfektioniert, doch erst seit wenigen Jahren reicht die Qualität der gewonnenen Diamanten an die von 
            natürlichen heran.
          </p>
        </li>      
        <li class="questions__item">
          Worin unterscheiden sich CLOUD 9-Diamanten von natürlichen?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
          <p class="item__answer">
            Unsere Diamanten werden im Labor gezüchtet. Im Plasma-Reaktor werden natürliche Bedingungen simuliert. Der Diamant wächst dort in weingen
            Wochen, wofür er in der Natur Millionen von Jahre gebraucht hat. Zu unterscheiden ist er aber deshalb noch nicht. Er ist identisch
            in der chemischen, optischen und physischen Zusammensetzung.
          </p>
        </li>        
        <li class="questions__item">
          Sind Lab Grown Diamanten ein neues Phänomen?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
          <p class="item__answer">
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
          </p>
        </li>        
        <li class="questions__item">
          Was ist ein Typ-IIA-Diamant?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
          <p class="item__answer">
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
          </p>
        </li>        
        <li class="questions__item">
          Wie werden CLOUD 9-Diamanten hergestellt?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
          <p class="item__answer">
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
          </p>
        </li>        
        <li class="questions__item">
          Wenn CLOUD 9-Diamanten identisch zu natürlichen sind, wieso werden sie dann
          speziell klassifiziert und zertifiziert?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
        </li>        
        <li class="questions__item">
          Sind CLOUD 9-Diamanten in unterschiedlichen Schliffen und Farben erhältlich?
          <div class="questions__icons icons">
            <img class="icons__image icons__image-close item__image-close" src="<?php echo $questionsImageClose ?>" alt="Image">
            <img class="icons__image icons__image-open item__image-open" src="<?php echo $questionsImageOpen ?>" alt="Image">
          </div>
          <p class="item__answer">
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
            Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
          </p>
        </li>
      </ul>
      
      <p class="questions__alternative">Not the answers you were looking for?</p>
      
      <div class="questions__send-mail">Send us an email</div>
    </div>
  </div>
  
  <!-- Bottom -->
  <?php include $bottom; ?>
</section>
    
<?php get_footer(); ?>