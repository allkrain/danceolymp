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

  <main class="page page_nolead">
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_contacts container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><a>Контакты</a></li>
        </ul>
      </div>
    </div>
    
    <header class="page-title page-title_contacts">
      <div class="container">
        <h1>Контакты</h1>
      </div>
    </header>
    
    <section class="contacts">
      <div class="contacts__container container">
        <address class="contacts__list">
          <p class="contacts__item contacts__item_phone">Телефон: <a href="tel:+74957784856"> +7 (495) 778-48-56,</a><a href="+79154007587"> +7 (915) 400-75-87</a></p>
          <p class="contacts__item contacts__item_email">Эл. адрес: <a href="mailto:info@danceolymp.ru">info@danceolymp.ru</a></p>
          <p class="contacts__item contacts__item_location">Адрес студии: <i>Летниковская, 6А, стр. 1</i></p>
          <p class="contacts__item contacts__item_time">Часы работы: <i>10:00 - 20:00</i></p>
        </address>
        <div class="contacts__fullway">
          <p>
            От Павелецкого вокзала двигаться по ул. Кожевническая, у дома 10 повернуть направона ул. Летниковская, двигаться до конца д. 6 А (ориентир большой ТЦ интернет-магазина Wikimart напротив через дорогу), повернуть направо и, не проходя дальше во двор, прямо в торце дома 6 А найти светло-коричневые металлические ворота с вывеской на воротах большими английскими буквами DANCE OLYMP. Войти в коридор, по правой стороне темно-коричневая дверь - вход непосредственно в помещение студии.
          </p>
        </div>
      </div>
    </section>
    
    <div class="map" id="googlemap"></div>
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