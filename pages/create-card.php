<?php
$title = "Home Page";

$home = "Новый товар";
?>
<?php include './layout/base.php'; ?>

<?php include './pages/sidebar.php'; ?>

<div class="content">
  <?php include './layout/header.php'; ?>
  <?php include './include/create-card.php'; ?>

</div>

<?php include './layout/footer.php'; ?>