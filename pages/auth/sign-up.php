<?php
$title = "Регистрация";
?>

<?php
  require_once "./include/config.php";
  require_once "./include/function.php";

  if(isset($_SESSION['is_auth'])){
    redirect_to('/');
  }

$data = $_POST;

if(isset($data['register'])){

  $username = clear_field($data['username']);
  $email = clear_field($data['email']);
  $password = clear_field($data['password']);
  $hash_password = password_hash($password, PASSWORD_DEFAULT);
  $confirm = clear_field($data['confirm']);

  $errMsg = [];
  if(empty($username)){
    $errMsg[] = "Поле не должно быть пустым";
  }
  if(empty($email)){
    $errMsg[] = "E-Mail не должен быть пустым";
  }
  if(empty($password)){
    $errMsg[] = "Пароль не должен быть пустым";
  }
  if(empty($confirm)){
    $errMsg[] = "Поле не должно быть пустым";
  }
  if($password !== $confirm){
    $errMsg[] = "Пароли не совпадают";
  }

  if(!$errMsg){
  
    $requery = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hash_password')";
    $result = mysqli_query($connect, $requery);
  
    if (!$result) {
      echo "Error";
    } else {
      redirect_to('/sign-in');
    }
  }
}
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
          <small class="errMsg"><?= $errMsg[0]; ?></small>
          <input type="text" name="username">
        </div>
        <div class="sign-input__collapse">
          <small>E-Mail</small>
          <small class="errMsg"><?= $errMsg[1]; ?></small>
          <input type="email" name="email">
        </div>
        <div class="sign-input__collapse">
          <small>Пароль</small>
          <small class="errMsg"><?= $errMsg[2]; ?></small>
          <input type="password" name="password">
        </div>
        <div class="sign-input__collapse">
          <small>Повторить пароль</small>
          <small class="errMsg"><?= $errMsg[3]; ?></small>
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