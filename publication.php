<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title></title>
  <?php include "blocks/css.php"; ?>
</head>

<body> 

  <?php include "blocks/page_header.php"; ?>
  
  <main class="page page_nolead">
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_events container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><a>События</a></li>
        </ul>
      </div>
    </div>
    
    <section class="page-section event">
      <div class="page-section__container event__container container">
        <article class="post">
          <header class="post__header">
            <div class="post__title">
              <h2>
                У нашей звёздной Каролины бронза!
              </h2>
              <time datetime="2016-09-09">09. 09. 2016</time>
            </div>
            <div class="post__follow">
              <p>Поделиться:</p>
              <ul class="post__socials socials">
                <li><a href="https://www.facebook.com/danceolymp/"><img src="img/fb.svg" alt="Facebook" width="7" height="11"></a></li>
                <li><a href="https://vk.com/dance_olymp"><img src="img/vk.svg" alt="ВКонтакте" width="15" height="8"></a></li>
              </ul>
            </div>
          </header>
          <div class="post__content">
            <div class="post__img">
              <img src="img/news/news_img.jpg" alt="">
            </div>
            <p>
              Каролина Усикова - тренер танцевальной студии "DANCE OLYMP" - заняла 3 место на Московском международном турнире по спортивным бальным танцам, 
              проходившем в конце декабря 2015 года,  в латиноамериканской программе, превзойдя мастерством 52 танцевальные пары!
            </p>
            <p>
              Постоянство в высочайшем результате - признак настоящего профессионала!
            </p>
          </div>
        </article>
        
        <div class="event__video video">
          <div class="video__promo">
          	<img src="img/video_promo1.jpg" alt="@@">
          	<iframe class="video__frame" src="https://www.youtube.com/embed/KvxNbi8tsrs?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        
        <div class="event__btns">
          <a href="#" class="event__btn btn btn_round btn_left btn_move-left btn_start">Предыдущая новость</a>
          <a href="#" class="event__btn btn btn_round btn_right btn_move-right">Следующая новость</a>
        </div>
      </div>
    </section>
  </main>  

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>