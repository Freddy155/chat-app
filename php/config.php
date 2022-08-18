<?php
  $hostname = "sql11.freemysqlhosting.net";
  $username = "sql11513513";
  $password = "qlWKDaYhNP";
  $dbname = "sql11513513";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
