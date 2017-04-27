<form action="send.php" method="post" class="order-form">
  <div class="order-form__container container">
    <div class="order-form__input order-form__name">
      <label for="name">Имя</label><input type="text" name="name" id="name" required>
    </div>
    <div class="order-form__input order-form__phone">
      <label for="phone">Телефон</label><input type="tel" name="tel" id="phone" required>
    </div>
    <div class="order-form__input order-form__email">
      <label for="email">Эл. почта</label><input type="email" name="email" id="email" required>
    </div>
    <div class="order-form__text">
      <label for="message">Сообщение</label><textarea name="message" id="message" rows="1"></textarea>
    </div>
    <div class="order-form__bottom">
    	<button class="order-form__btn btn btn_form" type="submit">Отправить</button>
    	<div class="order-form__error-message">
    	  <p>
    	    Заполните обязательные поля
    	  </p>
    	</div>
    </div>
  </div>
  <div class="order-form__success-message u-border">
      <h5>Ваше сообщение отправлено</h5>
      <p>
        В скором времени<br> с Вами свяжется наш менеджер
      </p>
    </div>
</form>