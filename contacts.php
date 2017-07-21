<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title>Контакты</title>
  <?php include "blocks/css.php"; ?>
</head>

<body> 

  <?php include "blocks/page_header.php"; ?>

  <main class="page page_nolead page_contacts">
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_contacts container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><a>Контакты</a></li>
        </ul>
      </div>
    </div>
    
    <!--<header class="page-title page-title_contacts">
      <div class="container">
        <h1>Контакты</h1>
        
      </div>
    </header>-->
    
    <section class="contacts">
      <div class="contacts__container container">
        
        <div class="contacts__info">
          <header class="page-title page-title_contacts">
            <h1>Контакты</h1>
          </header>
          <address class="contacts__list">
            <p class="contacts__item contacts__item_phone">Телефон: <a href="tel:+74957784856"> +7 (495) 778-48-56,</a><a href="+79154007587"> +7 (915) 400-75-87</a></p>
            <p class="contacts__item contacts__item_email">Эл. адрес: <a href="mailto:info@danceolymp.ru">info@danceolymp.ru</a></p>
            <p class="contacts__item contacts__item_location">Адрес студии: <i>Летниковская, 6А, стр. 1</i></p>
            <p class="contacts__item contacts__item_time">Часы работы: <i>10:00 - 20:00</i></p>
          </address>
        </div>
        
        <div class="contacts__fullway tabs">
          <div class="contacts__control tab-toggles">
            <button class="contacts__button tab-toggles__button active" type="button" data-tab-target="contacts-1">Как дойти</button>
            <button class="contacts__button tab-toggles__button" type="button" data-tab-target="contacts-2">Как доехать</button>
          </div>
          <div class="contacts__tab-container tabs__container" data-tab-group-container="contacts">
            <div class="contacts__content tabs__content active animated" data-tab-group="contacts" data-tab-id="contacts-1">
              <p>
                От Павелецкого вокзала двигаться по ул. Кожевническая, у дома 10 повернуть направона ул. Летниковская, двигаться до конца д. 6 А (ориентир большой ТЦ интернет-магазина Wikimart напротив через дорогу), повернуть направо и, не проходя дальше во двор, прямо в торце дома 6 А найти светло-коричневые металлические ворота с вывеской на воротах большими английскими буквами DANCE OLYMP. Войти в коридор, по правой стороне темно-коричневая дверь - вход непосредственно в помещение студии.
              </p>
            </div>
            <div class="contacts__content tabs__content animated" data-tab-group="contacts" data-tab-id="contacts-2">
              <p>
                Описание проезда
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="map" id="googlemap" data-panorama-image="img/mappanorama.jpg"></div>
  </main>
  
  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  
  <!-- Карта -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCUaCNfcDZQL7nZK07DQmAHsEetCCMIQ5w"></script>
  <script src="js/CustomGoogleMapMarker.js"></script>
  <script src="js/googlemap.js"></script>
  
  <?php include "blocks/scripts.php"; ?>
</body>
</html>