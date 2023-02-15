<?php
include "./pages/function.php";
?>
<?php
$title = "Регистрация";
?>
<?php include './layout/base.php'; ?>
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
      <input type="text" name="name">
    </div>
    <div class="sign-input__collapse">
      <small>E-mail</small>
      <input type="email" name="email">
    </div>
    <div class="sign-input__collapse">
      <small>Пароль</small>
      <input type="password" name="password">
    </div>
    <div class="sign-input__collapse" name="confirm-password">
      <small>Подтверждение пароля</small>
      <input type="password">
    </div>
  </div>
  <div class="sign-buttons">
    <button name="redirect-in">Войти</button>
    <button name="submit" type="submit" class="active">Регистрация</button>
  </div>
</form>
<?php include './layout/footer.php'; ?>