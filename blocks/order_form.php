<form action="send.php" method="post" class="order-form">
  <div class="order-form__input">
    <label for="name">Имя</label><input type="text" name="name" id="name">
  </div>
  <div class="order-form__input">
    <label for="phone">Телефон</label><input type="tel" name="phone" id="phone">
  </div>
  <div class="order-form__input">
    <label for="email">Эл. почта</label><input type="email" name="email" id="email">
  </div>
  <div class="order-form__text">
    <label for="message">Сообщение</label><textarea name="message" id="message" rows="1"></textarea>
  </div>
  <button class="btn" type="submit">Отправить</button>
  <div class="order-form__error-message" hidden>
    <p>
      Заполните обязательные поля
    </p>
  </div>
  <div class="order-form__success-message" hidden>
    <h5>Ваше сообщение отправлено</h5>
    <p>
      В скором времени с Вами свяжется наш менеджер
    </p>
  </div>
</form>