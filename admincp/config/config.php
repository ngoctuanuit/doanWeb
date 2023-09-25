<?php 
$mysqli = new mysqli("localhost","root","","db_tshopping");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối db_tshopping" . $mysqli->connect_error;
  exit();
}
?>