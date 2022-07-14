<?php
$con = mysqli_connect("sql107.epizy.com", "epiz_32126556", "gAvuGsWwLwA", "epiz_32126556_vaksin");

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>