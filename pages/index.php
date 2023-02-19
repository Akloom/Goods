<?php
$title = "Главная";
?>

<!-- <?php
  require_once "./include/function.php";
  if (!isset($_SESSION['is_auth'])) {
    redirect_to('/sign-in');
  }
?> -->

<?php include './layout/base.php'; ?>

<?php include './pages/sidebar.php'; ?>

<div class="content">
<?php include './layout/header.php'; ?>

  <section class="banner">
    <div class="banner-content">
      <h1>Вы пока не создали ни одного товара</h1>
      <img src="./assets/img/image/banner-image.svg" alt="">
      <a href="/create-card">Создать первый товар</a>
    </div>
  </section>
</div>

<?php include './layout/footer.php'; ?>