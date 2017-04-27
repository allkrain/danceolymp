<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title>Новости</title>
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

  <main class="page page_nolead">
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_news container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><a>Новости</a></li>
        </ul>
      </div>
    </div>
    
    <section class="page-section news">
      <div class="news__container container">
        <ul class="news__tabs updown-border">
          <li class="news__tabs-item active" data-tab="tab1"><a href="#">Статьи</a></li>
          <li class="news__tabs-item" data-tab="tab2"><a href="#">События</a></li>
          <li class="news__tabs-item" data-tab="tab3"><a href="#">Фотографии</a></li>
        </ul>
        
        <div class="news__tabs-content">
          <div id="tab1" class="news__tab-pane">
            <h2>Статьи</h2>
            <div class="news__tab-content">
              <article class="news__item">
                <a href="#"  class="news__img">
                  <img src="img/news/news1.jpg" alt="">
                </a>
                <div class="news__content">
                  <header class="news__title">
                    <h3>
                      <a href="#">У нашей звёздной Каролины бронза</a>
                    </h3>
                    <time datetime="2016-12-25">25.12.2016</time>
                  </header>
                  <p>
                    Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
                  </p>
                </div>
              </article>
              <article class="news__item">
                <a href="#"  class="news__img">
                  <img src="" alt="">
                </a>
                <div class="news__content">
                  <header class="news__title">
                    <h3>
                      <a href="">Успешное выступление нашей пары на Impire dance championship.</a>
                    </h3>
                    <time datetime="2016-12-18">18.12.2016</time>
                  </header>
                  <p>
                    Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
                  </p>
                </div>
              </article>
              <article class="news__item">
                <a href="#"  class="news__img">
                  <img src="" alt="">
                </a>
                <div class="news__content">
                  <header class="news__title">
                    <h3>
                      <a href="">Успешное выступление нашей пары на Impire dance championship.</a>
                    </h3>
                    <time datetime="2016-12-18">18.12.2016</time>
                  </header>
                  <p>
                    Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
                  </p>
                </div>
              </article>
              <article class="news__item">
                <a href="#"  class="news__img">
                  <img src="" alt="">
                </a>
                <div class="news__content">
                  <header class="news__title">
                    <h3>
                      <a href="">Успешное выступление нашей пары на Impire dance championship.</a>
                    </h3>
                    <time datetime="2016-12-18">18.12.2016</time>
                  </header>
                  <p>
                    Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
                  </p>
                </div>
              </article>
            </div>
            <div class="news__tab-navigation">
              <a href="#" class="news__btn btn btn_arrow-left">В начало</a>
              <ul class="paginator">
                <li class="paginator__item"><a href="#" class="btn btn_round btn_empty btn_left btn_move-left"></a></li>
                <li class="paginator__item"><a href="#">3</a></li>
                <li class="paginator__item"><a href="#">4</a></li>
                <li class="paginator__item active"><a>5</a></li>
                <li class="paginator__item"><a href="#">6</a></li>
                <li class="paginator__item"><a href="#">7</a></li>
                <li class="paginator__item"><a href="#">8</a></li>
                <li class="paginator__item"><a href="#" class="btn btn_round btn_empty btn_right btn_move-right"></a></li>
              </ul>
            </div>
          </div>
          <div id="tab2" class="news__tab-pane">
            <h2>События</h2>
            <ul class="news__events">
              <li class="news__event-item">
                <div class="news__title">
                  <a href="">Открыты новые группы</a>
                  <time datetime="2016-07-23">23.07.2016</time>
                </div>
              </li>
              <li class="news__event-item">
                <div class="news__title">
                  <a href="">Подарочные сертификаты</a>
                  <time datetime="2015-12-23">23.12.2015</time>
                </div>
              </li>
              <li class="news__event-item">
                <div class="news__title">
                  <a href="">Танцы на корпоративе</a>
                  <time datetime="2015-12-23">23.12.2015</time>
                </div>
              </li>
              <li class="news__event-item">
                <div class="news__title">
                  <a href="">Успешное выступление нашей пары на Impire dance championship</a>
                  <time datetime="2015-12-23">23.12.2015</time>
                </div>
              </li>
              <li class="news__event-item">
                <div class="news__title">
                  <a href="">Финал проекта "Танцы со Звездами"</a>
                  <time datetime="2015-12-23">23.12.2015</time>
                </div>
              </li>
            </ul>
            <div class="news__tab-navigation">
              <a href="#" class="news__btn btn btn_arrow-left">В начало</a>
              <ul class="paginator">
                <li class="paginator__item"><a href="#" class="btn btn_round btn_empty btn_left btn_move-left"></a></li>
                <li class="paginator__item"><a href="#">3</a></li>
                <li class="paginator__item"><a href="#">4</a></li>
                <li class="paginator__item active"><a>5</a></li>
                <li class="paginator__item"><a href="#">6</a></li>
                <li class="paginator__item"><a href="#">7</a></li>
                <li class="paginator__item"><a href="#">8</a></li>
                <li class="paginator__item"><a href="#" class="btn btn_round btn_empty btn_right btn_move-right"></a></li>
              </ul>
            </div>        
          </div>
          <div id="tab3" class="news__tab-pane news__slider">
            <h2>Фотографии</h2>
            <div class="news__slider-inner slider-overflow gallery">
              <div class="news__wrapper gallery-slides">
                <div class="news__gallery-img gallery-slide"><img src="img/about/review_gallery_min1.jpg" alt=""></div>
            	<div class="news__gallery-img gallery-slide"><img src="img/about/review_gallery_min1.jpg" alt=""></div>
            	<div class="news__gallery-img gallery-slide"><img src="img/about/review_gallery_min1.jpg" alt=""></div>
            	<div class="news__gallery-img gallery-slide"><img src="img/about/review_gallery_min1.jpg" alt=""></div>
              </div>
            </div>
            <div class="news__gallery-controls slider__controls gallery-controls">
            	<span class="btn btn_empty btn_round btn_left btn_move-left slider-arrow prev"></span>
            	<div class="news__slider-overflow slider-overflow">
            		<div class="wrapper-outer">
            			<ul class="news__minigallery wrapper slider-gallery minigallery">
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
      </div>
    </section>
  </main>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>