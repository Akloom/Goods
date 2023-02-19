<?php
$title = "Авторизация";
?>

<?php
  require_once "./include/config.php";
  require_once "./include/function.php";

if (isset($_SESSION['is_auth'])) {
  redirect_to('/');
}

session_start();

$data = $_POST;


if (isset($data['auth'])) {
  $email = clear_field($data['email']);
  $password = clear_field($data['password']);

  $errMsg = [];

  if (empty($email)) {
    $errMsg[] = "E-Mail не должен быть пустым";
  }
  if (empty($password)) {
    $errMsg[] = "Пароль не должен быть пустым";
  }

  if (!$errMsg) {


    $select_all_users = "SELECT * FROM `users`";
    $result_all_users = mysqli_query($connect, $select_all_users);

    while ($user = mysqli_fetch_assoc($result_all_users)) {
      if ($user['email'] === $email) {
        if (password_verify($password, $user['password'])) {
          $_SESSION['is_auth'] = true;
          $_SESSION['username'] = $user['username'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['id'] = $user['id'];
        } else {
          echo "Не верный пароль!";
        }
      } else {
        echo "Нет такого пользователя";
      }
    }
    redirect_to("/");
  }
}
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