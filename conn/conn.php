<?php
  $host="127.0.0.1";
  $userName="root";
  $password="root";
  $dbName="db_shop";
  $conn = mysqli_connect($host,$userName,$password,$dbName);
  mysqli_query($conn,"set names utf8");
?>
