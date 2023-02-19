<?php
$title = "Регистрация";
?>

<?php include './layout/base.php'; ?>

<div class="content">
  <div class="content-form">
    <form action="./sign-up.php" method="post" class="sign">

      <div class="sign-title">
        <svg class="sign-title__logo">
          <use href="./assets/img/icons/svg-sprites.svg#logo-icon"></use>
        </svg>
        <span>Регистрация</span>
      </div>
      <div class="sign-input">
        <div class="sign-input__collapse">
          <small>ФИО</small>
          <input type="text" name="username">
        </div>
        <div class="sign-input__collapse">
          <small>E-Mail</small>
          <input type="email" name="email">
        </div>
        <div class="sign-input__collapse">
          <small>Пароль</small>
          <input type="password" name="password">
        </div>
        <div class="sign-input__collapse">
          <small>Повторить пароль</small>
          <input type="password" name="confirm">
        </div>
      </div>
      <div class="sign-buttons">
        <a href="/sign-in" name="redirect-in" class="sign-buttons__btn">Войти</a>
        <button name="register" type="submit" class="sign-buttons__btn active">Регистрация</button>
      </div>
    </form>
  </div>
</div>
<?php include './layout/footer.php'; ?>