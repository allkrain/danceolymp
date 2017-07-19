<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include "blocks/head.php"; ?>
  <meta name="robots" content="all">
  <?php include "blocks/meta.php"; ?>
  <title>Услуги</title>
  <?php include "blocks/css.php"; ?>
</head>

<body> 

  <?php include "blocks/page_header.php"; ?>

  <main class="page page_nolead">
    <div class="page-navigation page-navigation_services">
      <div class="page-navigation__container page-navigation__container_services container">
        <ul class="breadcrumbs">
          <li><a href="index.php">Главная</a></li>
          <li><a>Услуги</a></li>
        </ul>
      </div>
    </div>
    
    <div class="short-navigation">
      <ul class="short-navigation__list">
        <li class="short-navigation__item">
          <a href="#private-lesson" class="short-navigation__link">
            Индивидуальный урок
          </a>
        </li>
        <li class="short-navigation__item">
          <a href="#group-lesson" class="short-navigation__link">
            Группа
          </a>
        </li>
        <li class="short-navigation__item">
          <a href="#wedding-dance" class="short-navigation__link">
            свадебный танец
          </a>
        </li>
        <li class="short-navigation__item">
          <a href="#corporative-programm" class="short-navigation__link">
            корпоративные программы
          </a>
        </li>
        <li class="short-navigation__item">
          <a href="#party" class="short-navigation__link">
            танцевальный вечер
          </a>
        </li>
        <li class="short-navigation__item">
          <a href="#gift-certificate" class="short-navigation__link">
            подарочный сертификат
          </a>
        </li>
        <li class="short-navigation__item">
          <a href="#competition-prepare" class="short-navigation__link">
            Подготовка к соревнованиям
          </a>
        </li>
      </ul>
    </div>
    
    <div class="page-section page-intro page-intro_services">
      <div class="page-section__container container">
        <p>
          Опытный тренер подберет программу, соответствующую вашему уровню подготовки, прислушается к вашим пожеланиям и обеспечит гибкий график занятий. Занимаясь с персональным преподавателем,
          вы сможете осваивать танцевальную науку в комфортном для себя темпе, получая максимум внимания тренера и не отвлекаясь на других учеников
          (во время урока в зале занимается только 1 пара с тренером).
        </p>
      </div>
    </div>
    
    <section class="page-section services services_all">
      <div class="container">
        <h2>У с л у г и</h2>
        
        <section class="service service_personal service_private" id="private-lesson">
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
            <div class="page-btns page-btns_vertical service__btns">
              <a href="private_lesson.php" class="service__btn btn btn_round btn_plus btn_shift">Подробнее</a>
              <a href="dance-styles.php" class="service__btn btn btn_round btn_plus btn_shift">Стили</a>
              <a href="trainers.php" class="service__btn btn btn_round btn_plus btn_shift">Преподаватели</a>
            </div>
          </div>
        </section>
    
        <section class="service service_group service_band" id="group-lesson">
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
            <p>
              Занятия в группе проходят более динамично, чем индивидуальный урок, взаимодействие между тренером и учениками создает особую атмосферу,
              поэтому групповые уроки так популярны у тех, кому нравится знакомиться с новыми людьми.
            </p>
            <p>
              Обучение в группах проводится сольно и в парах, с учетом состава группы.
            </p>
            <div class="service__btns">
              <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
            </div>
          </div>
          <ul class="page-btns service__btns-list">
            <li><a href="" class="btn btn_round btn_plus btn_shift">Бальные танцы</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Танго-mix</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 3</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 4</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 5</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 6</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 7</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 8</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 9</a></li>
            <li><a href="" class="btn btn_round btn_plus btn_shift">Группа 10</a></li>
          </ul>
        </section>
    
        <section class="service service_wedding" id="wedding-dance">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/wedding_dance.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_small tlt">Свадебный</p>
              <p class="service__title service__title_big tlt2">танец</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>
              Преподаватели студии обладают большим опытом постановки свадебного танца. 
              Мы помогаем молодоженам подготовить незабываемый танец в короткие сроки 
              и в удобное для них время!
            </p>
            <div class="service__btns">
              <a href="wedding_dance.php" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
            </div>
          </div>
        </section>
    
        <section class="service service_corporative" id="corporative-programm">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/corporative_dance.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_small tlt">Корпоративные</p>
              <p class="service__title service__title_big tlt2">программы</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>
              Танцы — прекрасный вид корпоративного досуга и лучший способкомандно-образующего тренинга. Студия предлагает руководителям компаний и кадровых служб 
            </p>
            <div class="service__btns">
              <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
            </div>
          </div>
        </section>
    
        <section class="service service_party" id="party">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/dance_party.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_small tlt">Танцевальный</p>
              <p class="service__title service__title_big tlt2">вечер</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>
              В программу таких вечеров включаются выступления профессиональных танцевальных пар, проведение мастер-классов для гостей,
              показательные выступления пар профессионал-любитель (тренер-студент) и другие интересные мероприятия 
              (подробнее о танцах на корпоративах).
            </p>
            <div class="service__btns">
              <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
            </div>
          </div>
        </section>
    
        <section class="service service_gift" id="gift-certificate">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/gift_dance.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_small tlt">Подарочный</p>
              <p class="service__title service__title_big tlt2">сертификат</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>
              В программу таких вечеров включаются выступления профессиональных танцевальных пар, проведение мастер-классов для гостей,
              показательные выступления пар профессионал-любитель (тренер-студент) и другие интересные мероприятия 
              (подробнее о танцах на корпоративах).
            </p>
            <div class="service__btns">
              <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
            </div>
          </div>
        </section>
    
        <section class="service service_competition" id="competition-prepare">
          <figure class="service__img">
            <div class="service__bottom-img">
              <img src="img/services/bg_img.png" alt="">
            </div>
            <div class="service__top-img">
              <img src="img/services/competition.png" alt="">
            </div>
            <figcaption>
              <p class="service__title service__title_big tlt">Подготовка</p>
              <p class="service__title service__title_small tlt2">к соревнованиям</p>
            </figcaption>
          </figure>
          <div class="service__content">
            <p>
              В программу таких вечеров включаются выступления профессиональных танцевальных пар, проведение мастер-классов для гостей,
              показательные выступления пар профессионал-любитель (тренер-студент) и другие интересные мероприятия 
              (подробнее о танцах на корпоративах).
            </p>
            <div class="service__btns">
              <a href="#" class="service__btn btn btn_round btn_plus"><span></span>Подробнее</a>
            </div>
          </div>
       </section>
    </div>
    </section>
      
    
    <section class="page-section support">
      <div class="support__container container">
        <div class="support__phone">
          <p>
            По вопросу предоставления услуг частным лицам, компаниям 
            или дополнительной информацией обращайтесь к нам по телефонам:
          </p>
          <a href="tel:+74957784856">+7 (495) 778-4856</a>
          <a href="tel:+79154007587">+7 (915) 400-7587</a>
        </div>
        <div class="support__email">
          <p>По электронной почте <a href="mailto:info@danceolymp.ru">info@danceolymp.ru</a></p>
        </div>
        <div class="support__answer">
          <p>Или оставьте свои контакты и мы Вам перезвоним</p>
        </div>
      </div>
      <div class="page-request">
        <div class="page-request__title n-border n-border_cross">
          <p>Запишитесь на пробное занятие</p>
        </div>
        <?php include "blocks/order_form.php"; ?>
      </div>
    </section>
  </main>

  <?php include "blocks/page_footer.php"; ?>

  <?php include "blocks/forms.php"; ?>
  <?php include "blocks/scripts.php"; ?>
</body>
</html>