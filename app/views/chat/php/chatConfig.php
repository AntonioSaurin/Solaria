<?php
  $credentials = require 'database.php';

  $conn = mysqli_connect($credentials['host'], $credentials['username'], $credentials['password'], $credentials['dbname']);

  if(!$conn){
    echo "Erro de conexão".mysqli_connect_error();
  }
?>
