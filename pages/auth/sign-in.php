<?php
include "./pages/function.php";
?>

<?php
$title = "Авторизация";
?>
<?php include './layout/base.php'; ?>

<form action="" method="post" class="sign">
  <div class="sign-title">
    <svg class="">
      <use href="./assets/img/icons/svg-sprites.svg#logo-icon"></use>
    </svg>
    <span>Авторизация</span>
  </div>
  <div class="sign-input">
    <div class="sign-input__collapse">
      <small>E-mail</small>
      <input type="email" name="email">
    </div>
    <div class="sign-input__collapse">
      <small>Password</small>
      <input type="password" name="password">
    </div>
  </div>
  <div class="sign-buttons">
    <button type="submit" name="send" class="active">Войти</button>
    <button name="redirect-up">Регистрация</button>
  </div>
</form>

<?php include './layout/footer.php'; ?>