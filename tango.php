<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title>Танцуем танго</title>
  <?php include "blocks/css.php"; ?>
</head>

<body> 

  <?php include "blocks/page_header.php"; ?>

  <main class="page">
    
    <section class="page-section lead lead_tango">
      <div class="lead__video video-bg">
        <div class="video-bg__promo lead__img">
          <img src="img/services/tango_lead@1x.jpg" alt="" srcset="img/services/tango_lead@1,5x.jpg 1.5x, img/services/tango_lead@2x.jpg 2x">
          <div class="tv">
		  	<div class="screen mute" id="tv"></div>
		  </div>
        </div>
        <div class="video-bg__controls">
          <div class="video-bg__toggles">
            <button class="video-bg__btn video-bg__btn_pause"></button>
            <button class="video-bg__btn video-bg__btn_music"></button>
          </div>
          <div class="video-bg__statusbar">
            <div class="video-bg__status-pass"></div>
            <div class="video-bg__status-still"></div>
          </div>
        </div>
      </div>
      <div class="lead__container container">
        <header class="lead__title">
          <h2>Танго-один из узнаваемых<br> и популярных парных танцев</h2>
        </header>
      </div>      
    </section>
    
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_tango container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><a href="services.php">Услуги</a></li>
          <li><a>Танго</a></li>
        </ul>
      </div>
    </div>
    
    <div class="page-section page-intro page-intro_tango">
      <div class="page-section__container container">
        <p>
          Пронзительная музыка, напряженная энергетика, взаимодействие между мужчиной и женщиной в паре делают этот танец особенно эмоциональным и любимым. 
          Специально для поклонников этого танца мы создали группу Танго-mix, занимаясь в которой можно научиться танцевать различные виды танго. 
        </p>
      </div>
    </div>
    
    <section class="page-section trends">
      <div class="trends__container container">
        <h2 class="page-section__title trends__title">Условно выделяют следующие основные направления</h2>
        <div class="text-list trends__list">
          <ul class="text-list__list phil trends__items trends__items_left">
            <li class="text-list__item">бальное танго (Ballroom Tango или Tango International), танец из программы спортивно-бальных танцев;</li>
            <li class="text-list__item">аргентинское танго (Tango Argentine) – очень популярный и зрелищный вид танго, внутри которого существует несколько самостоятельных стилей; </li>
          </ul>
          <ul class="text-list__list phil trends__items trends__items_right">
            <li class="text-list__item">американское танго (Tango American Style);</li>
            <li class="text-list__item">танго в стиле social dance, которое включает в себя самые популярные фигуры из бального танго, аргентинского и американского танго.</li>
          </ul>
        </div>
        <div class="trends__describe phil">
          <p>
            На уроках в группе Танго-mix под руководством опытных преподавателей вы быстро освоите популярные фигуры и хореографию танго и сможете 
            танцевать любимый танец на дружеской вечеринке, светском мероприятии или на отдыхе. Начните свой роман с танго с первого урока!
          </p>
        </div>
      </div>
    </section>
    
    <section class="trainers tango-trainers">
      <div class="tango-trainers__container container">
        <h2 class="page-section__title tango-trainers__title">Преподаватели</h2>
        <ul class="trainers__list tango-trainers__list">
          <li class="trainers__item tilter tilter--1">
            <figure class="tilter__figure">
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
          <li class="trainers__item tilter tilter--1">
            <figure class="tilter__figure">
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
        </ul>
      </div>
    </section>
    
    <section class="page-section tango-shedule dance">
      <div class="tango-shedule__container container">
        <h2 class="page-section__title tango-shedule__title">Расписание группы танго-mix на сентябрь</h2>
        <div class="dance__cost dance__cost_tango">
          <p class="dance__price">4000<span> руб. </span>&mdash; </p>
          <p class="dance__count">8<span> уроков</span></p>
        </div>
        <div class="dance__duration dance__duration_tango">
          <p>Пятница, 19:00-20:00</p>
        </div>
        <div class="tango-shedule__describe phil">
          <p>
            Для углубленной работы над танцевальной техникой или постановки показательного номера рекомендуем записаться на индивидуальный урок с персональным тренером. 
            Продолжительность урока 45 минут, стоимость 1600 руб.
          </p>
          <p>
            Кроме Танго-mix в студии работают группы бальных танцев/social dance и Латина-mix, занимаясь в которых вы научитесь танцевать популярные 
            парные танцы (вальс, танго, фокстрот, сальса, румба, ча-ча-ча и другие), а также зажигательные латиноамериканские танцы, 
            которые можно танцевать как в паре, так и сольно.
          </p>
        </div>
        <div class="shedule-table-wrapper">
        <table class="shedule-table">
          <tr class="shedule-table__row">
            <td class="shedule-table__cell shedule-table__cell_day">Понедельник</td>
            <td class="shedule-table__cell shedule-table__cell_lesson">Бальные танцы/social dance</td>
            <td class="shedule-table__cell shedule-table__cell_time">19:00 - 20:00</td>
          </tr>
          <tr class="shedule-table__row">
            <td class="shedule-table__cell shedule-table__cell_day">Среда</td>
            <td class="shedule-table__cell shedule-table__cell_lesson">Бальные танцы/social dance</td>
            <td class="shedule-table__cell shedule-table__cell_time">19:00 - 20:00</td>
          </tr>
          <tr class="shedule-table__row shedule-table__row_gold">
            <td class="shedule-table__cell shedule-table__cell_day">Пятница</td>
            <td class="shedule-table__cell shedule-table__cell_lesson">Танго-mix</td>
            <td class="shedule-table__cell shedule-table__cell_time">19:00 - 20:00</td>
          </tr>
          <tr class="shedule-table__row">
            <td class="shedule-table__cell shedule-table__cell_day">Суббота</td>
            <td class="shedule-table__cell shedule-table__cell_lesson">Латина-mix</td>
            <td class="shedule-table__cell shedule-table__cell_time">11:00 - 12:00</td>
          </tr>
        </table>
        </div>
      </div>
    </section>
    
    <section class="page-section contact-info contacts-info_tango">
      <div class="contact-info__container container">
        <div class="contact-info__phone">
          <p>
            Позвоните нам и запишитесь на занятия
          </p>
          <a href="tel:+74957784856">+7 (495) 778-4856</a>
          <a href="tel:+79154007587">+7 (915) 400-7587</a>
        </div>
        <div class="contact-info__address">
          <p>
            Адрес студии: Летниковская, 6А, стр. 1
          </p>
        </div>
      </div>
    </section>    
    
    <div class="page-request">
      <div class="page-request__title n-border n-border_cross">
        <p>Свяжитесь с нами</p>
      </div>
      <?php include "blocks/order_form.php"; ?>
    </div>
  </main>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>