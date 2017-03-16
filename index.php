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

  <?php include "blocks/page_header.php"; ?>

  <section class="page-section lead slider">
    <div class="slider__item">
      <picture class="lead__img">
        <img src="img/australian_tango@1x.jpg" alt="" width="100%" srcset="img/australian_tango@1,5x.jpg 1.5x, img/australian_tango@2x.jpg 2x, img/australian_tango@3x.jpg 3x">
      </picture>
      <div class="lead__container">
        <header class="lead__title">
          <h2><a href="#">Аргентинское танго</a></h2>
          <p>Аргентинское танго  появилось в конце XIX века в бедных эмигрантских кварталах Буэнос-Айреса,
           куда съезжались эмигранты в поисках счастья, здесь встретились культурные традиции стран всего мира.
          </p>
        </header>
        <footer class="lead__footer">
          <ul class="lead__socials socials">
            <li><a href="https://www.facebook.com/danceolymp/"><img src="img/fb.svg" alt="" width="7" height="11"></a></li>
            <li><a href="https://vk.com/dance_olymp"><img src="img/vk.svg" alt="" width="15" height="8">></a></li>
          </ul>
          <a href="" class="lead__btn-mouse"></a>
          <a href="" class="lead__btn btn btn_round btn_plus">Подробнее</a>
        </footer>
      </div>
    </div>
    <div class="lead__controls controls">
      <span class="controls_prev">Назад</span>
      <span class="controls_next">Вперед</span>
    </div>
  </section>

  <section class="page-section services">
    <div class="container">
      <h2>Услуги</h2>
      <section class="services__section service">
        <figure class="service__img">
          <picture class="service__bottom-img">
            <img src="img/services/bg_img.png" alt="">
          </picture>
          <picture class="service__top-img">
            <img src="img/services/individual_lesson.png" alt="">
          </picture>
          <figcaption><span>Индивидуальный</span> урок</figcaption>
        </figure>
        <div class="service__content">
          <p>Тем, кто хочет быстрее научиться танцевать, или уделить больше внимания танцевальной технике, можно посоветовать занятия в формате индивидуального урока.
          </p>
          <p> Опытный тренер подберет программу, соответствующую вашему уровню подготовки, прислушается к вашим пожеланиям и обеспечит
          гибкий график занятий.
          </p>
          <a href="#" class="service__btn btn btn_round btn_plus">Подробнее</a>
        </div>
      </section>
      <section class="services__section service">
        <figure class="service__img">
          <picture class="service__bottom-img">
            <img src="img/services/bg_img_2.png" alt="">
          </picture>
          <picture class="service__top-img">
            <img src="img/services/group.png" alt="">
          </picture>
          <figcaption>Группа</figcaption>
        </figure>
        <div class="service__content">
          <p>Занятия в группе проходят более динамично, чем индивидуальный урок, взаимодействие между тренером и учениками создает особую атмосферу, 
          поэтому групповые уроки так популярны у тех, кому нравится знакомиться с новыми людьми.
          </p>
          <p>
            Обучение в группах проводится сольно и в парах, с учетом состава группы.
          </p>
          <a href="#" class="service__btn btn btn_round btn_plus">Подробнее</a>
        </div>
      </section>
      <section class="services__section service">
        <figure class="service__img">
          <picture class="service__bottom-img">
            <img src="img/services/bg_img.png" alt="">
          </picture>
          <picture class="service__top-img">
            <img src="img/services/tango.png" alt="">
          </picture>
          <figcaption>Танго</figcaption>
        </figure>
        <div class="service__content">
          <p>
            Пронзительная музыка, напряженная энергетика, взаимодействие между мужчиной и женщиной в паре делают этот танец особенно эмоциональным и любимым.
            Специально для поклонников этого танца мы создали группу Танго-mix, занимаясь в которой можно научиться танцевать различные виды танго. 
          </p>
          <a href="#" class="service__btn btn btn_round btn_plus">Подробнее</a>
        </div>
      </section>
    </div>
  </section>

  <section class="page-section dance-styles">
    <div class="container">
      <h2>Танцевальные стили</h2>
      <div class="slider">
        <div class="slider__item">
          <div class="slider__number">
            <span>01</span>
            <sapn>03</sapn>
          </div>
          <article class="dance-style__describe">
            <h3><a href="#">Бальные танцы, латиноамериканская программа</a></h3>
            <p>
              Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
              с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем.
              Самба, действительно, веселый и очень ритмичный танец, при звуках музыки самбы
              ноги сами начинают отбивать ритм и танцоры
              едва могут устоять на месте!
            </p>
          </article>
          <div class="dance-styles__img"><img src="img/dance_style_1.jpg" alt=""></div>
        </div>
      </div>
      <div class="dance-styles__controls controls">
        <span class="controls_prev">Назад</span>
        <span class="controls_next">Вперед</span>
      </div>
    </div>
  </section>

  <section class="page-section review">
    <div class="review__bg-line"><img src="img/bg_line_review.jpg" alt=""></div>
    <div class="container">
      <header class="review__header">
        <h2>Отзывы</h2>
        <a href="#" class="btn">Все отзывы</a>
      </header>
      <div class="review__img">
        <img src="img/review_img.jpg" alt="">
      </div>
      <div class="review__video">
        <a href="#" class="review__video-btn btn btn_youtube">Смотреть</a>
      </div>
      <div class="review__content">
        <p>          
          Самба – при названии этого танца сразу возникают картинки бразильского фестиваля
          с причудливо одетыми танцорами, бешенными ритмами и безудержным весельем. Самба,
          действительно, веселый и очень ритмичный танец, при звуках музыки самбы ноги сами начинают
          отбивать ритм и танцоры едва могут устоять на месте!
        </p>
      </div>
    </div>
  </section>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>