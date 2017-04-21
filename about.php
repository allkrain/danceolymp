<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title>О студии</title>
  <?php include "blocks/css.php"; ?>
</head>

<body> 

  <?php include "blocks/page_header.php"; ?>

  <main class="page">
    <section class="page-section lead">
      <div class="lead__img">
        <img src="img/about/about_lead.jpg" alt="">
      </div>
    </section>
    
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_about container">
        <ul class="breadcrumbs">
          <li><a href="index.php">Главная</a></li>
          <li><a>О студии</a></li>
        </ul>
      </div>
    </div>
    
    <div class="page-section page-intro">
      <div class="page-intro__container container">
        <div class="page-intro__content">
          <div class="page-intro__col page-intro__col_left">
            <p class="phil">
              Танцевальная студия «Данс Олимп» организована профессиональными танцорами и любителями, которые пришли в танцы в зрелом возрасте. Мы стремимся воплотить в нашей танцевальной студии все лучшее из собственного опыта, накопленного за годы преподавания и обучения танцам. Мы знаем, как важно поддержать тех, кто только начинает заниматься танцами и обеспечить им внимание с первого дня. Тренеры, работающие в студии, имеют значительный опыт работы с активными, состоявшимся в профессии людьми и умеют заинтересовать и поддержать их в этом начинании.
            </p>
          </div>
          <div class="page-intro__col page-intro__col_right">
            <p class="phil">
              Основные танцевальные направления, по которым проводится обучение в студии
            </p>
            <div class="text-list">
              <p class="text-list__title phil">Бальные танцы:</p>
              <ul class="text-list__list phil">
                <li class="text-list__item">&laquo;европейская программа&raquo; - вальс, танго, венский вальс, фокстрот, быстрый фокстрот</li>
                <li class="text-list__item">&laquo;латиноамериканская программа&raquo; - самба, ча-ча-ча, румба, пасодобль, джайв</li>
                <li class="text-list__item">Американские вариации бальных танцев</li>
                <li class="text-list__item">Клубная латина</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="page-intro__btns page-btns page-btns_vertical">
          <a href="wedding_dance.php" class="btn btn_round btn_right btn_shift btn_move-right">Свадебный танец</a>
          <a href="tango.php" class="btn btn_round btn_right btn_shift btn_move-right">Танцуем танго</a>
          <a href="private_lesson.php" class="btn btn_round btn_right btn_shift btn_move-right">Индивидуальный урок</a>
        </div>      
      </div>
    </div>
    
    <section class="page-section about">
      <div class="about__container container">
        <h2>&laquo;Данс Олимп&raquo; — это место, где Вы:</h2>
        <div class="about__features text-list">
          <ul class="text-list__list text-list__list_about phil updown-border">
            <li class="text-list__item">Научитесь уверенно двигаться под любую музыку;</li>
            <li class="text-list__item">Расширите круг общения и встретите единомышленников;</li>
            <li class="text-list__item">Подготовитесь к важному мероприятию, будь то корпоративный вечер, благотворительный бал, свадьба или дружеская вечеринка;</li>
            <li class="text-list__item">Снимите напряжение, обретете ощущение естественной гармонии с собой. 
              Ждем Вас в студии и желаем успешного путешествия в волшебный мир танца!
            </li>
            <li class="text-list__item">Улучшите свою физическую форму, координацию, приведете в тонус все группы мышц;</li>
          </ul>
        </div>
        <div class="about__mission mission">
          <p class="mission__title">Наша цель &mdash; </p>
          <p class="mission__text">
            помочь Вам раскрыть свой потенциал, наш приоритет &mdash; индивидуальный подход к каждому. Ждем Вас в студии и желаем успешного путешествия в волшебный мир танца!
          </p>
        </div>
        <div class="about__slider mask-slider">
        	<div class="about__gallery">
        	  <div class="about__gallery-img slider__item project"><img src="img/about/about_slide1.jpg" alt=""></div>
        	  <div class="about__gallery-img slider__item project"><img src="img/about/about_lead.jpg" alt=""></div>
        	  <div class="about__gallery-img slider__item project"><img src="img/about/about_slide1.jpg" alt=""></div>
        	  <div class="about__gallery-img slider__item project"><img src="img/about/about_lead.jpg" alt=""></div>
        	</div>
        	<div class="about__gallery-controls controls container">
        	  <span class="controls__prev mask-slider-arrow previous">Назад</span>
        	  <span class="controls__next mask-slider-arrow next">Вперед</span>
        	</div>
        </div>
        <div class="about__video video">
          <div class="video__promo">
          	<img src="img/video_promo1.jpg" alt="@@" class="video__poster">
          	<img src="img/play.svg" alt="@@" class="video__playicon">
          	<iframe class="video__frame" src="https://www.youtube.com/embed/KvxNbi8tsrs" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="page-section trainers slider">
      <header class="trainers__header container">
        <h2>Наши преподаватели</h2>
      </header>
      <div class="slideshow container" tabindex="0">
	  	<div class="trainers__slide ss-slide slide--layout-7" data-layout="layout7">
		  <ul class="trainers__list slider__list slide-imgwrap">
      	    <li class="trainers__item slider__item tilter tilter--1 slide__img">
      	      <figure class="tilter__figure slide__img-inner">
      	        <img src="img/trainers/Sadovskiy@1x.jpg" alt="@@" srcset="img/trainers/Sadovskiy@1,5x.jpg 1.5x, img/trainers/Sadovskiy@2x.jpg 2x, img/trainers/Sadovskiy@3x.jpg 3x" class="trainers__img tilter__image">
      	        <div class="tilter__deco tilter__deco--shine"><div></div></div>
      	        <figcaption class="trainers__title tilter__caption">
      	          <p class="trainers__surname">Садовский</p>
      	          <p class="trainers__name">Владимир Алексеевич</p>
      	        </figcaption>
      	        <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 280 420">
					<path d="M15,15h252v391h-252V20.5z"/>
			      </svg>
      	      </figure>
      	    </li>
      	    <li class="trainers__item slider__item tilter tilter--1 slide__img">
      	      <figure class="tilter__figure slide__img-inner">
      	        <img src="img/trainers/Gromov@1x.jpg" alt="" srcset="img/trainers/Gromov@1,5x.jpg 1.5x, img/trainers/Gromov@2x.jpg 2x, img/trainers/Gromov@3x.jpg 3x" class="trainers__img tilter__image">
      	        <div class="tilter__deco tilter__deco--shine"><div></div></div>
      	        <figcaption class="trainers__title tilter__caption">
      	          <p class="trainers__surname">Громов</p>
      	          <p class="trainers__name">Никита Сергеевич</p>
      	        </figcaption>
      	        <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 280 420">
					<path d="M15,15h252v391h-252V20.5z"/>
			      </svg>
      	      </figure>
      	    </li>
      	    <li class="trainers__item slider__item tilter tilter--1 slide__img">
      	      <figure class="tilter__figure slide__img-inner">
      	        <img src="img/trainers/Sadovskaya@1x.jpg" alt="" srcset="img/trainers/Sadovskaya@1,5x.jpg 1.5x, img/trainers/Sadovskaya@2x.jpg 2x, img/trainers/Sadovskaya@3x.jpg 3x" class="trainers__img tilter__image">
      	        <div class="tilter__deco tilter__deco--shine"><div></div></div>
      	        <figcaption class="trainers__title tilter__caption">
      	          <p class="trainers__surname">Садовская</p>
      	          <p class="trainers__name">Екатерина Дмитриевна</p>
      	        </figcaption>
      	        <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 280 420">
					<path d="M15,15h252v391h-252V20.5z"/>
			      </svg>
      	      </figure>
      	    </li>
      	  </ul>
			<div class="slide__title">
			  <h3 class="slide__title-main"></h3>
			  <p class="slide__title-sub"></p>
			</div>
      	</div><!-- /slide -->
      	<div class="trainers__slide ss-slide slide--layout-7" data-layout="layout7">
			<ul class="trainers__list slider__list slide-imgwrap">
      	    <li class="trainers__item slider__item tilter tilter--1 slide__img">
      	      <figure class="tilter__figure slide__img-inner">
      	        <img src="img/trainers/Sadovskiy@1x.jpg" alt="@@" srcset="img/trainers/Sadovskiy@1,5x.jpg 1.5x, img/trainers/Sadovskiy@2x.jpg 2x, img/trainers/Sadovskiy@3x.jpg 3x" class="trainers__img tilter__image">
      	        <div class="tilter__deco tilter__deco--shine"><div></div></div>
      	        <figcaption class="trainers__title tilter__caption">
      	          <p class="trainers__surname">Садовский</p>
      	          <p class="trainers__name">Владимир Алексеевич</p>
      	        </figcaption>
      	        <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 280 420">
					<path d="M15,15h252v391h-252V20.5z"/>
			      </svg>
      	      </figure>
      	    </li>
      	    <li class="trainers__item slider__item tilter tilter--1 slide__img">
      	      <figure class="tilter__figure slide__img-inner">
      	        <img src="img/trainers/Gromov@1x.jpg" alt="" srcset="img/trainers/Gromov@1,5x.jpg 1.5x, img/trainers/Gromov@2x.jpg 2x, img/trainers/Gromov@3x.jpg 3x" class="trainers__img tilter__image">
      	        <div class="tilter__deco tilter__deco--shine"><div></div></div>
      	        <figcaption class="trainers__title tilter__caption">
      	          <p class="trainers__surname">Громов</p>
      	          <p class="trainers__name">Никита Сергеевич</p>
      	        </figcaption>
      	        <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 280 420">
					<path d="M15,15h252v391h-252V20.5z"/>
			      </svg>
      	      </figure>
      	    </li>
      	    <li class="trainers__item slider__item tilter tilter--1 slide__img">
      	      <figure class="tilter__figure slide__img-inner">
      	        <img src="img/trainers/Sadovskaya@1x.jpg" alt="" srcset="img/trainers/Sadovskaya@1,5x.jpg 1.5x, img/trainers/Sadovskaya@2x.jpg 2x, img/trainers/Sadovskaya@3x.jpg 3x" class="trainers__img tilter__image">
      	        <div class="tilter__deco tilter__deco--shine"><div></div></div>
      	        <figcaption class="trainers__title tilter__caption">
      	          <p class="trainers__surname">Садовская</p>
      	          <p class="trainers__name">Екатерина Дмитриевна</p>
      	        </figcaption>
      	        <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 280 420">
					<path d="M15,15h252v391h-252V20.5z"/>
			      </svg>
      	      </figure>
      	    </li>
      	  </ul>
			<div class="slide__title">
			  <h3 class="slide__title-main"></h3>
			  <p class="slide__title-sub"></p>
			</div>
      	</div><!-- /slide -->
      	<div class="trainers__controls controls container slideshow__nav slideshow__nav--arrows">
          <span class="controls__prev slider-arrow prev" id="prev-slide" aria-label="Previous slide">Назад</span>
      	  <span class="controls__next slider-arrow next" id="next-slide" aria-label="Next slide">Вперед</span>
        </div>
      </div><!-- /slideshow -->
    </section>
    
    <section class="page-section review review_about slider">
      <div class="review__container container">
        <header class="review__header">
          <h2>Отзывы о нас</h2>
        </header>
        <div class="review__slider">
          <div class="review__video">
            <a href="" class="review__video-btn btn btn_youtube" data-fancybox data-anchor>Смотреть</a>
          </div>
          <div class="slider-overflow">
          	<div class="wrapper">
          		<div class="review__slider-item slider__item slide" data-link="https://www.youtube.com/watch?v=KvxNbi8tsrs">
          		  <div class="review__media">
          		    <div class="review__img">
          		      <img src="img/about/review_img.jpg" alt="">
          		    </div>
          		  </div>
          		  <div class="review__content">
          		    <p class="gotham animated fast">          
          		      Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
          		      с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем. Самба,
          		      действительно, веселый и очень ритмичный танец, при звуках музыки самбы ноги сами начинают
          		      отбивать ритм и танцоры едва могут устоять на месте!
          		    </p>
          		  </div>
          		</div>
          		<div class="review__slider-item slider__item slide" data-link="https://www.youtube.com/watch?v=KvxNbi8tsrs">
          		  <div class="review__media">
          		    <div class="review__img">
          		      <img src="img/about/review_img.jpg" alt="">
          		    </div>
          		  </div>
          		  <div class="review__content">
          		    <p class="gotham animated fast">          
          		      Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
          		      с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем. Самба,
          		      действительно, веселый и очень ритмичный танец, при звуках музыки самбы ноги сами начинают
          		      отбивать ритм и танцоры едва могут устоять на месте!
          		    </p>
          		  </div>
          		</div>
          		<div class="review__slider-item slider__item slide" data-link="https://www.youtube.com/watch?v=KvxNbi8tsrs">
          		  <div class="review__media">
          		    <div class="review__img">
          		      <img src="img/about/review_img.jpg" alt="">
          		    </div>
          		  </div>
          		  <div class="review__content">
          		    <p class="gotham animated fast">          
          		      Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
          		      с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем. Самба,
          		      действительно, веселый и очень ритмичный танец, при звуках музыки самбы ноги сами начинают
          		      отбивать ритм и танцоры едва могут устоять на месте!
          		    </p>
          		  </div>
          		</div>
          		<div class="review__slider-item slider__item slide" data-link="https://www.youtube.com/watch?v=KvxNbi8tsrs">
          		  <div class="review__media">
          		    <div class="review__img">
          		      <img src="img/about/review_img.jpg" alt="">
          		    </div>
          		  </div>
          		  <div class="review__content">
          		    <p class="gotham animated fast">          
          		      Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
          		      с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем. Самба,
          		      действительно, веселый и очень ритмичный танец, при звуках музыки самбы ноги сами начинают
          		      отбивать ритм и танцоры едва могут устоять на месте!
          		    </p>
          		  </div>
          		</div>
          	</div>
          </div>
          <div class="review__slider-controls slider__controls">
            <span class="btn btn_empty btn_round btn_left btn_move-left slider-arrow prev"></span>
            <div class="review__slider-overflow slider-overflow">
            	<div class="wrapper-outer">
            		<ul class="review__minigallery wrapper slider-gallery">
            		  <li class="slide active"><img src="img/about/review_gallery_min1.jpg" alt=""></li>
            		  <li class="slide"><img src="img/about/review_gallery_min1.jpg" alt=""></li>
            		  <li class="slide"><img src="img/about/review_gallery_min1.jpg" alt=""></li>
            		  <li class="slide"><img src="img/about/review_gallery_min1.jpg" alt=""></li>
            		</ul>
            	</div>
            </div>
            <span class="btn btn_empty btn_round btn_right btn_move-right slider-arrow next"></span>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>