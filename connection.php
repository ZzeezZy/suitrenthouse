<?php
  $dbserver = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "user_data";

  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
  if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
  }
?>
