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

  <?php include "blocks/page_header.php"; ?>

  <div class="page-navigation">
    <div class="container">
      <ul class="breadcrumbs">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Новости</a></li>
      </ul>
    </div>
  </div>
  
  <section class="page-section news">
    <div class="container">
      <ul class="news__tabs">
        <li class="active"><a href="#tab1">Статьи</a></li>
        <li><a href="#tab2">События</a></li>
        <li><a href="#tab3">Фотографии</a></li>
      </ul>
      
      <div class="news__tabs-content">
        <div id="tab1" class="news__tab-pane active">
          <h2>Статьи</h2>
          <article class="news__item">
            <header class="news__title">
              <h3>
                <a href="#">У нашей звёздной Каролины бронза</a>
              </h3>
              <time datetime="2016-12-25">25.12.2016</time>
            </header>
            <a href="#"  class="news__img">
               <picture>
                 <img src="img/news/news1.jpg" alt="">
               </picture>
            </a>
            <p>
              Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
            </p>
          </article>
          <article class="news__item">
            <header class="news__title">
              <h3>
                <a href="">Успешное выступление нашей пары на Impire dance championship.</a>
              </h3>
              <time datetime="2016-12-18">18.12.2016</time>
            </header>
            <a href="#"  class="news__img">
               <picture>
                 <img src="" alt="">
               </picture>
            </a>
            <p>
              Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
            </p>
          </article>
          <article class="news__item">
            <header class="news__title">
              <h3>
                <a href="">Успешное выступление нашей пары на Impire dance championship.</a>
              </h3>
              <time datetime="2016-12-18">18.12.2016</time>
            </header>
            <a href="#"  class="news__img">
               <picture>
                 <img src="" alt="">
               </picture>
            </a>
            <p>
              Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
            </p>
          </article>
          <article class="news__item">
            <header class="news__title">
              <h3>
                <a href="">Успешное выступление нашей пары на Impire dance championship.</a>
              </h3>
              <time datetime="2016-12-18">18.12.2016</time>
            </header>
            <a href="#"  class="news__img">
               <picture>
                 <img src="" alt="">
               </picture>
            </a>
            <p>
              Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место
            </p>
          </article>
          <div class="news__tab-navigation">
            <a href="#" class="btn btn__arrow-left">В начало</a>
            <ul class="paginator">
              <li><a href="#">Назад</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">8</a></li>
              <li><a href="3">Вперед</a></li>
            </ul>
          </div>
        </div>
        <div id="tab2" class="news__tab-pane fade">
          <h3>События</h3>
          <article class="news__item">
            <header class="news__header">
              <h3><a href="#"></a></h3>
              <time></time>
            </header>
            <p></p>
          </article>
          <article class="news__item">
            <header class="news__header">
              <h3><a href="#"></a></h3>
              <time></time>
            </header>
            <p></p>
          </article>
          <article class="news__item">
            <header class="news__header">
              <h3><a href="#"></a></h3>
              <time></time>
            </header>
            <p></p>
          </article>
          <article class="news__item">
            <header class="news__header">
              <h3><a href="#"></a></h3>
              <time></time>
            </header>
            <p></p>
          </article>          
        </div>
        <div id="tab3" class="news__tab-pane fade">
          <h3>Фотографии</h3>
          <ul class="news__gallery">
            <li><a href="#">
                <picture><img src="" alt=""></picture>
              </a></li>
            <li><a href="#">
                <picture><img src="" alt=""></picture>
              </a></li>
            <li><a href="#">
                <picture><img src="" alt=""></picture>
              </a></li>
            <li><a href="#">
                <picture><img src="" alt=""></picture>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>