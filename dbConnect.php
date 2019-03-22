<?php

$conn = mysqli_connect('localhost', 'ryan', 'password', 'music');
  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }

?>
