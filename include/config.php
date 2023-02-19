<?php
  // $host = 'localhost';
  // $db = 'Goods';
  // $user = 'root';
  // $pass = '';

  // try{
  //   $connect = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
  // } catch (PDOException $error){
  //   echo "Ошибка соединения с БД" . $error -> getMessage();
  // }


  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("DB_NAME", "Goods");

  $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if(!$connect){
    die("Code error: " . mysqli_connect_errno() . " MYSQL Error! " . mysqli_connect_error());
    exit();
  }
?>