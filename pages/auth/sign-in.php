<?php
$title = "Авторизация";
?>

<?php include './layout/base.php'; ?>

<div class="content">
  <div class="content-form">
    <form action="" method="post" class="sign">
      <div class="sign-title">
        <svg class="sign-title__logo">
          <use href="./assets/img/icons/svg-sprites.svg#logo-icon"></use>
        </svg>
        <span>Авторизация</span>
      </div>
      <div class="sign-input">
        <div class="sign-input__collapse">
          <small>Электронная почта</small>
          <input type="email" name="email">
        </div>
        <div class="sign-input__collapse">
          <small>Пароль</small>
          <input type="password" name="password">
        </div>
      </div>
      <div class="sign-buttons">
        <button type="submit" name="auth" class="sign-buttons__btn active">Войти</button>
        <a href="/sign-up" name="redirect-up" class="sign-buttons__btn">Регистрация</a>
      </div>
    </form>
  </div>
</div>
<?php include './layout/footer.php'; ?>