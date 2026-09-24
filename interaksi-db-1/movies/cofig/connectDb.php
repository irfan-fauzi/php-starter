<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "phpdasar";
  
  $connection = mysqli_connect($host, $user, $password, $database);
  // cek koneksi
  if(!$connection){
    die("koneksi failed : " . mysqli_connect_error());
  }
?>