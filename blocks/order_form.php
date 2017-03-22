<form action="send.php" method="post" class="order-form">
  <div class="order-form__container container">
    <div class="order-form__input order-form__name">
      <label for="name">Имя</label><input type="text" name="name" id="name" required>
    </div>
    <div class="order-form__input order-form__phone">
      <label for="phone">Телефон</label><input type="tel" name="phone" id="phone" required>
    </div>
    <div class="order-form__input order-form__email">
      <label for="email">Эл. почта</label><input type="email" name="email" id="email">
    </div>
    <div class="order-form__text">
      <label for="message">Сообщение</label><textarea name="message" id="message" rows="1"></textarea>
    </div>
    <button class="order-form__btn btn btn_form" type="submit">Отправить</button>
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
  </div>
</form>