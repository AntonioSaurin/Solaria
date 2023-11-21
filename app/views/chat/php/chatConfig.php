<?php
  $hostname = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "dbSolaria";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Erro de conexão".mysqli_connect_error();
  }
?>
