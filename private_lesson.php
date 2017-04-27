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

  <main class="page">
    
    <section class="page-section lead lead_private">
      <div class="lead__img">
        <img src="img/services/private_lead.jpg" alt="">
      </div>
      <div class="lead__container container">
        <header class="lead__title">
          <h2>Индивидуальный урок</h2>
        </header>
      </div>      
    </section>
    
    <div class="page-navigation">
      <div class="page-navigation__container page-navigation__container_private container">
        <ul class="breadcrumbs">
          <li><a href="#">Главная</a></li>
          <li><a href="services.php">Услуги</a></li>
          <li><a>Индивидуальный урок</a></li>
        </ul>
      </div>
    </div>
    
    <div class="page-section page-intro page-intro_private">
      <div class="page-section__container container">
        <p>
          Тем, кто хочет быстрее научиться танцевать, или уделить больше внимания танцевальной технике, можно посоветовать занятия в формате индивидуального урока.
        </p>
      </div>
    </div>
    
    <section class="page-section dance dance_private">
      <div class="dance__container container">
        <h2 class="page-section__title dance__title">Индивидуальный урок</h2>
        <div class="dance__describe">
          <p>
            Опытный тренер подберет программу, соответствующую вашему уровню подготовки, прислушается к вашим пожеланиям и обеспечит 
            гибкий график занятий. Занимаясь с персональным преподавателем, вы сможете осваивать танцевальную науку в комфортном для себя темпе, 
            получая максимум внимания тренера и не отвлекаясь на других учеников (во время урока в зале занимается только 1 пара с тренером). 
          </p>
        </div>
        <div class="dance__video video">
          <div class="video__promo">
          	<img src="img/video_promo1.jpg" alt="@@" class="video__poster">
          	<img src="img/play2.svg" alt="@@" class="video__playicon">
          	<iframe class="video__frame" src="https://www.youtube.com/embed/KvxNbi8tsrs" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <a href="tango.php" class="dance__btn btn btn_round btn_right btn_move-right">Танцуем танго</a>
      </div>
    </section>
  </main>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>