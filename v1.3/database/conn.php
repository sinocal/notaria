<?php
  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = '';
  $DB_NAME = 'notaria';

  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

  if (!$conn){
    die("Connection failed: ".mysqli_connect_error().mysqli_connect_errno());
  }
  
?>
