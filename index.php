<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title>Главная</title>
  <?php include "blocks/css.php"; ?>
</head>

<body>
  
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="filters">
    <defs>
      <filter id="blur">
	    <feGaussianBlur in="SourceGraphic" stdDeviation="0,0" />
      </filter>
    </defs>
  </svg>

  <?php include "blocks/page_header.php"; ?>

  <main class="page-content">
    <div class="page-section__maincontainer">
        <section class="page-section lead__slider">
       	  <div class="lead__slider-inner gallery">
       	    <div class="lead__wrapper gallery-slides">
       	      <div class="slider__item gallery-slide">
       	        <img src="img/australian_tango@1x.jpg" alt="" width="100%" srcset="img/australian_tango@1,5x.jpg 1.5x, img/australian_tango@2x.jpg 2x, img/australian_tango@3x.jpg 3x">
       	        <div class="lead__container container">
       	          <header class="lead__title">
       	            <h2><a href="tango.php">Аргентинское танго</a></h2>
       	            <p>Аргентинское танго  появилось в конце XIX века в бедных эмигрантских кварталах Буэнос-Айреса, куда съезжались эмигранты в поисках счастья, здесь встретились культурные традиции стран всего мира.</p>
       	          </header>
       	          <a href="tango.php" class="lead__btn btn btn_round btn_plus" data-anchor><span></span>Подробнее</a>
       	        </div>
       	      </div>
       	      <div class="slider__item gallery-slide">
       	        <img src="img/about/about_slide1.jpg" alt="@@">
       	        <div class="lead__container container">
       	          <header class="lead__title">
       	            <h2><a href="tango.php">Свадебный танец</a></h2>
       	            <p>Свадебный танец  появилcя в конце XIX века в бедных эмигрантских кварталах Буэнос-Айреса, куда съезжались эмигранты в поисках счастья, здесь встретились культурные традиции стран всего мира.</p>
       	          </header>
       	          <a href="wedding_dance.php" class="lead__btn btn btn_round btn_plus" data-anchor><span></span>Подробнее</a>
       	        </div>
       	      </div>
       	    </div>
       	  </div>
          <div class="lead__controls gallery-controls controls container">
            <span class="controls__prev prev">Назад</span>
            <span class="controls__next next">Вперед</span>
          </div>
        </section>
        <div class="container">
            <footer class="lead__footer">
              <ul class="lead__socials socials">
                <li><a href="https://www.facebook.com/danceolymp/"><img src="img/fb.svg" alt="" width="7" height="11"></a></li>
                <li><a href="https://vk.com/dance_olymp"><img src="img/vk.svg" alt="" width="15" height="8">></a></li>
              </ul>
              <a href="#services" class="lead__btn-mouse nav">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="35" viewBox="0 0 23 35"><defs><style>.cls-1{fill-rule:evenodd}</style></defs><path class="cls-1" d="M11.5 0A11.6 11.6 0 0 0 0 11.661V23.34a11.5 11.5 0 1 0 23 0V11.661A11.6 11.6 0 0 0 11.5 0zm10.22 23.34a10.221 10.221 0 1 1-20.44 0V11.661a10.221 10.221 0 1 1 20.44 0V23.34zM11.5 3.888a.646.646 0 0 0-.64.649v5.869a.64.64 0 1 0 1.28 0V4.537a.646.646 0 0 0-.64-.649z"/></svg>
              </a>
            </footer>
        </div>
    </div>
    
    <section class="page-section services" id="services">
      <div class="container">
        <h2>У с л у г и</h2>
        <section class="services__section service service_personal">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/individual_lesson.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_small tlt">Индивидуальный</p>
              <p class="service__title service__title_big tlt2">урок</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>Тем, кто хочет быстрее научиться танцевать, или уделить больше внимания танцевальной технике, можно посоветовать занятия в формате индивидуального урока.
            </p>
            <p> Опытный тренер подберет программу, соответствующую вашему уровню подготовки, прислушается к вашим пожеланиям и обеспечит
            гибкий график занятий.
            </p>
            <a href="private_lesson.php" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
          </div>
        </section>
        <section class="services__section service service_group">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img_2.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/group.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_big tlt">Группа</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>Занятия в группе проходят более динамично, чем индивидуальный урок, взаимодействие между тренером и учениками создает особую атмосферу, 
            поэтому групповые уроки так популярны у тех, кому нравится знакомиться с новыми людьми.
            </p>
            <p>
              Обучение в группах проводится сольно и в парах, с учетом состава группы.
            </p>
            <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
          </div>
        </section>
        <section class="services__section service service_tango">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/tango.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_big tlt">Танго</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>
              Пронзительная музыка, напряженная энергетика, взаимодействие между мужчиной и женщиной в паре делают этот танец особенно эмоциональным и любимым.
              Специально для поклонников этого танца мы создали группу Танго-mix, занимаясь в которой можно научиться танцевать различные виды танго. 
            </p>
            <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
          </div>
        </section>
      </div>
    </section>
    
    <section class="page-section dance-styles">
      <div class="container">
        <h2>Танцевальные стили</h2>
        <div class="dance-styles__slider">
          <div class="dance-styles__slider-main-container gallery">
             <div class="slider__count">
          	   <span class="slider__number">01</span>
          	   <span class="slider__total">02</span>
          	 </div>
            <div class="dance-styles__wrapper gallery-slides">
              <div class="dance-styles__slide gallery-slide">
          	    <div class="dance-styles__content slider__item">
          	      <article class="dance-styles__describe">
          	        <h3 class="animated fast"><a href="dance_styles.php">Бальные танцы, латиноамериканская программа</a></h3>
          	        <p class="gotham animated fast delay">
          	          Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
          	          с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем.
          	          Самба, действительно, веселый и очень ритмичный танец, при звуках музыки самбы
          	          ноги сами начинают отбивать ритм и танцоры
          	          едва могут устоять на месте!
          	        </p>
          	      </article>
          	      <div class="dance-styles__img"><img src="img/dance_style_1.jpg" alt="@@" class="animated fast"></div>
          	    </div>
          	  </div>
          	  <div class="dance-styles__slide gallery-slide">
          	    <div class="dance-styles__content slider__item">
          	      <article class="dance-styles__describe">
          	        <h3 class="animated fast"><a href="dance_styles.php">Клубная латина</a></h3>
          	        <p class="gotham animated fast delay">
          	          К этой группе мы относим сальсу, меренге, бачату, свинг. Это танцы, которые можно танцевать как в паре, так и по одному, технически не сложные, красивые, с настроением. Эти танцы прекрасно подходят для любой клубной вечеринки, мастер-класса, тим-билдинга, да и просто когда хочется подвигаться. Практически под любую популярную музыку можно станцевать сальсу, свинг, меренге или бачату.
          	        </p>
          	      </article>
          	      <div class="dance-styles__img"><img src="img/dance_styles/club.png" alt="@@" class="animated fast"></div>
          	    </div>
          	  </div>
          	</div>
        </div>
        <div class="dance-styles__controls gallery-controls controls">
            <span class="controls__prev prev">Назад</span>
            <span class="controls__next next">Вперед</span>
          </div>
        </div>
      </div>
    </section>
    
    <section class="page-section review">
      <div class="review__container container">
        <header class="review__header n-border">
          <h2>Отзывы</h2>
        </header>
        <div class="review__media">
          <div class="review__img">
            <img src="img/review_img.jpg" alt="">
          </div>
          <div class="review__video">
            <a href="https://www.youtube.com/watch?v=KvxNbi8tsrs" class="review__video-btn btn btn_youtube" data-fancybox>Смотреть</a>
          </div>
        </div>
        <div class="review__content review__content_block">
          <p class="gotham">          
            Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
            с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем. Самба,
            действительно, веселый и очень ритмичный танец, при звуках музыки самбы ноги сами начинают
            отбивать ритм и танцоры едва могут устоять на месте!
          </p>
        </div>
        <footer class="review__footer u-border">
          <a href="about.php" class="btn">Все отзывы</a>
        </footer>
      </div>
    </section>
  </main>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>