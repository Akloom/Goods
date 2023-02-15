<?php
  $host = 'localhost';
  $db = 'Goods';
  $user = 'root';
  $pass = '';

  try{
    $connect = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
  } catch (PDOException $error){
    echo "Ошибка соединения с БД" . $error -> getMessage();
  }
?>