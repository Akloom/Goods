<?php
  require_once "./include/config.php";
  require_once "./include/function.php";
?>

<?php
$title = "Страница не найдена";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title><?= $title ?></title>
  <link rel="website icon" type="svg" href="../assets/img/icons/logo-icon.svg">
</head>

<body>
  <div class="error">
    <img src="../assets/img/image/404-image.svg" alt="">
    <span>Страница не найдена.
      <a href="/">Вернуться на главную.</a>
    </span>
  </div>

  <?php include './layout/footer.php'; ?>